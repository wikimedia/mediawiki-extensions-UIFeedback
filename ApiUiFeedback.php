<?php
class UiFeedbackAPI extends ApiBase {
	public function execute() {

		$can_read  = $this->getUser()->isAllowed( 'read_uifeedback' );
		$can_write = $this->getUser()->isAllowed( 'write_uifeedback' );

		// Get the parameters
		$params = $this->extractRequestParams();


		if( !$can_read ) {
			$this->dieUsage( 'you have to be logged in to use that api', 'error' );
		}

		$method = $params[ 'mode' ];


		if( $method == 'feedback' ) { /* handling of feedback requests */

			$type = $params[ 'ui-feedback-type' ];
			if( $type !== '1' && $type !== '0' ) {
				$this->dieUsage( 'ui-feedback-type has to be either 0 or 1! ', 'error-code', 400 );
			}

			/* I decided to use getFuzzyBool, because using $params['ui-feedback-anonymous'] leads to mysterious behaviour,
			   a request with "ui-feedback-anonymous:false" was "ui-feedback-anonymous: true" when I printed params to the response */
			$anonymous = $this->getRequest()->getFuzzyBool( 'ui-feedback-anonymous' );
			if( $anonymous ) {
				$username = '';
			} else {
				/* username or IP */
				$username = $this->getUser()->getName();
			}

			$notify = 0;
			if( !$anonymous ) {
				$notify = $this->getRequest()->getFuzzyBool( 'ui-feedback-notify', null );
			}

			$task  = $params[ 'ui-feedback-task' ];
			$other = $params[ 'ui-feedback-task-other' ];
			if( $other !== null ) {
				$task .= ' - ' . $other;
			}

			$done = $params[ 'ui-feedback-done' ];
			if( $done === '1' ) {
				$done = 1;
			} elseif( $done === '0' ) {
				$done = 0;
			} else {
				$done = null;
			}

			$url = $params[ 'ui-feedback-url' ];

			$a = array(
				'uif_type'       => $type,
				'uif_url'        => $url,
				'uif_task'       => $task,
				'uif_done'       => $done,
				'uif_importance' => $params[ 'ui-feedback-importance' ],
				'uif_happened'   => $params[ 'ui-feedback-happened' ],
				'uif_text1'      => $params[ 'ui-feedback-text1' ],
				'uif_username'   => $username,
				'uif_useragent'  => $params[ 'ui-feedback-useragent' ],
				'uif_notify'     => $notify,
				'uif_status'     => '0',
				'uif_comment'    => ''
			);

			$dbw = wfGetDB( DB_MASTER );
			/* insert Feedback into Database */
			$dbw->begin();
			$dbw->insert( 'uifeedback', $a, __METHOD__, array() );
			$id = $dbw->insertId();
			$dbw->update( 'uifeedback_stats', array( 'uifs_sent = uifs_sent + 1' ), array( 'uifs_type' => $type ), __METHOD__ );
			$dbw->commit();
			/* return okay and the id (needed for screenshot upload) */
			$this->getResult()->addValue( null, $this->getModuleName(), array( 'status' => 'ok', 'id' => $id ) );
			/* end feedback */

		} elseif( $method == 'count' ) { /* handling of count requests (for statistics) */
			$type  = $params[ 'type' ]; /* 0 dynamic request (popup), 1 questionnaire-button, 2 screenshot-button */
			$show  = $this->getRequest()->getFuzzyBool( 'show', false ); /* 1 = true */
			$click = $this->getRequest()->getFuzzyBool( 'click', false ); /* 1 = true*/
			$sent  = $this->getRequest()->getFuzzyBool( 'sent', false ); /* 1 = true*/

			/* illegal request */
			$this->requireOnlyOneParameter( $params, 'show', 'click', 'sent' );

			if( ( !$can_read ) || ( $type < 0 || $type > 2 ) || ( !$show && !$click && !$sent ) ) {
				$this->dieUsage( "Bad request!", 'error' );
			}

			if( $show ) {
				$value = array( 'uifs_shown = uifs_shown + 1' );
			} elseif( $click ) {
				$value = array( 'uifs_clicked = uifs_clicked + 1' );
			} elseif( $sent ) {
				$value = array( 'uifs_sent = uifs_sent + 1' );
			} else {
				$this->dieUsage( 'Bad Request', 'error' );
			}

			/* update table */
			$dbw = wfGetDB( DB_MASTER );
			$dbw->update( 'uifeedback_stats',
						  $value,
						  array( 'uifs_type' => $type ),
						  __METHOD__
			);

			$this->getResult()->addValue( null, $this->getModuleName(), array( 'status' => 'ok' ) );
			/* end count */
			/* review */
		} elseif( $method == 'review' ) {
			if( !$can_write ) {
				$this->dieUsage( 'Permission denied! ', 'error-code', 403 );
			}
			$id         = $params[ 'id' ];
			$new_status = $params[ 'status' ];
			$comment    = $params[ 'comment' ];
			$reviewer   = $this->getUser()->getName();
			$dbw        = wfGetDB( DB_MASTER );
			$dbw->begin();
			$values = array( 'uif_status' => $new_status, 'uif_comment' => $comment );
			$conds  = array( 'uif_id' => $id );
			$dbw    = wfGetDB( DB_MASTER );
			$dbw->update( 'uifeedback', $values, $conds, __METHOD__, array() );

			$values = array( 'uifr_feedback_id' => $id,
							 'uifr_reviewer'    => $reviewer,
							 'uifr_status'      => $new_status,
							 'uifr_comment'     => $comment
			);
			$dbw->insert( 'uifeedback_reviews', $values, __METHOD__, array() );

			$dbw->commit();
			if( $dbw->doneWrites() ) {
				$this->getResult()->addValue( null, $this->getModuleName(), array( 'status' => 'ok', 'params' => $params ) );
			} else {
				$this->dieUsage( 'Write to DB was not successful', 'error' );
			}
		} else {
			$this->dieUsage( 'Bad Request', 'error' );
		}

	}

	// Description
	public function getDescription() {
		return 'This Api handles requests from the UIFeedback Extension';
		return 'This Api handles requests from the UIFeedback Extension';
	}

	// parameter.
	public function getAllowedParams() {
		return array(
			'mode'                   => array(),
			'ui-feedback-anonymous'  => array( ApiBase::PARAM_TYPE => 'boolean',
											   ApiBase::PARAM_DFLT => false ),
			'ui-feedback-username'   => array(),
			'ui-feedback-notify'     => array(),
			'ui-feedback-task'       => array(),
			'ui-feedback-task-other' => array( ApiBase::PARAM_TYPE => 'string',
											   ApiBase::PARAM_DFLT => null ),
			'ui-feedback-done'       => array( ApiBase::PARAM_TYPE => 'string', /* i took string here because boolean defaults to false when not set */
											   ApiBase::PARAM_DFLT => null ),
			'ui-feedback-type'       => array( ApiBase::PARAM_TYPE => array( '0', '1' ) ),
			'ui-feedback-url'        => array(),
			'ui-feedback-importance' => array( ApiBase::PARAM_TYPE => array( '0', '1', '2', '3', '4', '5' ),
											   ApiBase::PARAM_DFLT => '0' ),
			'ui-feedback-url'        => array(),
			'ui-feedback-happened'   => array( ApiBase::PARAM_TYPE => array( '0', '1', '2', '3', '4' ),
											   ApiBase::PARAM_DFLT => '0' ),
			'ui-feedback-text1'      => array( ApiBase::PARAM_TYPE => 'string' ),
			'ui-feedback-useragent'  => array( ApiBase::PARAM_TYPE => 'string' ),
			'file'                   => array(),
			'id'                     => array( ApiBase::PARAM_TYPE => 'integer',
											   ApiBase::PARAM_MIN  => 1 ),
			'status'                 => array( ApiBase::PARAM_TYPE => array( '1', '2', '3' ) ),
			'comment'                => array( ApiBase::PARAM_TYPE => 'string' ),
			'type'                   => array( ApiBase::PARAM_TYPE => array( '0', '1', '2' ) ),
			'click'                  => array( ApiBase::PARAM_TYPE => 'integer' ),
			'show'                   => array( ApiBase::PARAM_TYPE => 'integer' ),
			'sent'                   => array( ApiBase::PARAM_TYPE => 'integer' ),

		);
	}

	// Describe the parameter
	public function getParamDescription() {
		return array_merge( parent::getParamDescription(), array(
			'mode'                   => 'method to use in the api (feedback, review, count)',
			'ui-feedback-anonymous'  => 'true, if the user want to post the feedback privately',
			'ui-feedback-username'   => 'the username of the user ',
			'ui-feedback-notify'     => '1, if the user wants be be notified about updated on this issue',
			'ui-feedback-task'       => 'the task (position in the list of tasks)',
			'ui-feedback-task-other' => 'free text, if other is selected in task',
			'ui-feedback-done'       => '0: no, 1: yes, undefined',
			'ui-feedback-type'       => '0: Screenshot, 1: Questionnaire',
			'ui-feedback-url'        => 'the url from where the feedback came',
			'ui-feedback-importance' => 'an integer for the importance, 0-5',
			'ui-feedback-happened'   => '0 unknown, 1 not expected, 2 confused, 3 missing feature, 4 other',
			'ui-feedback-text1'      => 'the comment (free text)',
			'ui-feedback-useragent'  => 'the useragent',
			'file'                   => 'binary data (the rendered png)',
			'id'                     => 'for review-mode: feedback-id',
			'status'                 => 'for review-mode: review-status',
			'comment'                => 'for review-mode: review-comment',
			'type'                   => 'type of stat-request',
			'click'                  => '',
			'show'                   => '',
			'sent'                   => '',
		) );
	}

	// Get examples
	// TODO
	public function getExamples() {
		return array(
			'api.php?action=apisampleoutput&face=O_o&format=xml' => 'Get a sideways look (and the usual predictions)'
		);
	}
}
