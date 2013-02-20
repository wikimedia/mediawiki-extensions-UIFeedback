<?php
/**
 * Internationalisation for UiFeedback extension
 *
 * @file
 * @ingroup Extensions
 */

$messages =
	array();

/** English
 *
 * @author lbenedix
 */
$messages[ 'en' ] = array(
	'uifeedback'                                => 'UI-Feedback', // Ignore

	'ui-feedback-desc'                          => 'This extension allows Users to give feedback about the user interface',

	'ui-feedback-headline'                      => 'Feedback',
	'ui-feedback-scr-headline'                  => 'Feedback',

	'ui-feedback-task-label'                    => 'I wanted to:',
	'ui-feedback-task-0'                        => 'please select', // item
	'ui-feedback-task-1'                        => 'add/edit an item', // item
	'ui-feedback-task-2'                        => 'add/edit a label', // label
	'ui-feedback-task-3'                        => 'add/edit a description', // description
	'ui-feedback-task-4'                        => 'add/edit an alias', // alias
	'ui-feedback-task-5'                        => 'add/edit links', // links
	'ui-feedback-task-6'                        => 'search', // search
	'ui-feedback-task-7'                        => 'other:', // other

	'ui-feedback-done-label'                    => 'Were you able to complete your task?',

	'ui-feedback-good-label'                    => 'What happened while you were editing?',
	'ui-feedback-bad-label'                     => 'What behavior have you been expecting?',
	'ui-feedback-comment-label'                 => 'Please give us some more details:',

	'ui-feedback-happened-label'                => 'Tell us what happened:',
	'ui-feedback-happened-1'                    => 'Something did not work as expected',
	'ui-feedback-happened-2'                    => 'I got confused',
	'ui-feedback-happened-3'                    => 'I am missing a feature',
	'ui-feedback-happened-4'                    => 'Something else',


	'ui-feedback-importance-label'              => 'How important is it for you:',
	'ui-feedback-importance-1'                  => 'not important',
	'ui-feedback-importance-5'                  => 'very important',

	'ui-feedback-anonym-label'                  => 'I want to post it privately.',
	'ui-feedback-anonym-help'                   => 'Check this box if you don\'t want to share your username. Please note that we will not be able to keep you updated on your submitted issue if you choose to remain anonymous.',
	'ui-feedback-notify-label'                  => 'I want to be updated on this issue.',
	'ui-feedback-notify-help'                   => 'Check this box if you want us to leave you a note on your userpage when we work on your issue.',

	'ui-feedback-notify-sent'                   => 'Feedback sent <br/><br/><small>See <a href="$1">Feedback-Table</a></small>',
	'ui-feedback-notify-postedit'               => 'Please consider sharing your feedback with the developers.</br></br><small id="ui-feedback-show-postedit"><a href="#" >Don\'t ask again</a></small>',
	'ui-feedback-notify-upload-sent'            => 'Feedback sent<br/>thanks for your patience<br/><br/><small>See <a href="$1">Feedback-Table</a></small>',
	'ui-feedback-notify-upload-fail'            => 'Something went wrong<br/>Please try again and if it\'s still not working contact us.',
	'ui-feedback-notify-upload-progress'        => 'Uploading: <img src="http://upload.wikimedia.org/wikipedia/commons/9/92/Bert2_transp_5B5B5B_cont_150ms.gif" alt="loading">',

	'ui-feedback-yes'                           => 'yes',
	'ui-feedback-no'                            => 'no',

	'ui-feedback-problem-reset'                 => 'reset',
	'ui-feedback-problem-send'                  => 'send',
	'ui-feedback-problem-close'                 => 'close',
	'ui-feedback-problem-cancel'                => 'cancel',

	'ui-feedback-highlight-label'               => 'Click and drag an area to help us, to understand your feedback:',

	'ui-feedback-yellow'                        => 'Highlight areas that are relevant.',
	'ui-feedback-black'                         => 'Blackout any personal information.',
	'ui-feedback-sticky'                        => 'Sticky notes for annotations.',

	'ui-feedback-help-headline'                 => 'What to report:',
	'ui-feedback-help-subheading'               => 'How to Use:',
	'ui-feedback-help-text-top'                 => 'Elements and interactions that: <ul><li>prevent task completion</li><li>have an effect on task performance or cause a significant delay</li><li>make suggestion necessary</li><li>confuse and frustrate you</li><li>is a minor but annoying detail</li></ul>',
	'ui-feedback-help-text-bottom'              => 'You can highlight and blackout areas on the page to give us a hint where to look at',

	'ui-feedback-prerender-headline'            => 'Confirm Screenshot-Feedback',
	'ui-feedback-prerender-text1'               => 'A screenshot will now be rendered and uploaded to the server. That could take some time.',
	'ui-feedback-prerender-text2'               => 'Please don\'t close the browser until you see the message "Feedback sent".',


	/*Specialpage texts*/
	'ui-feedback-special-feedback'              => 'Feedback',
	'ui-feedback-special-stats'                 => 'Stats',

	'ui-feedback-special-nothing-found'         => 'Nothing found',
	'ui-feedback-special-found'                 => 'Found $1 {{PLURAL:$1|item|items}}:',

	'ui-feedback-special-none'                  => 'none',


	'ui-feedback-special-no-permission'         => 'You have not the right permissions to see that Page',

	'ui-feedback-special-happened-1'            => 'did not work as expected',
	'ui-feedback-special-happened-2'            => 'got confused',
	'ui-feedback-special-happened-3'            => 'missing feature',
	'ui-feedback-special-happened-4'            => 'other',

	'ui-feedback-special-yes'                   => 'yes',
	'ui-feedback-special-no'                    => 'no',

	'ui-feedback-special-status-open'           => 'open',
	'ui-feedback-special-status-in-review'      => 'in review',
	'ui-feedback-special-status-closed'         => 'closed',
	'ui-feedback-special-status-declined'       => 'declined',

	'ui-feedback-special-filter'                => 'Filter',

	'ui-feedback-special-undefined'             => 'undefined',

	'ui-feedback-special-type-screenshot'       => 'Screenshot',
	'ui-feedback-special-type-questionnaire'    => 'Questionnaire',

	'ui-feedback-special-top5-users'            => 'Users with most submissions (by closed feedback):',

	'ui-feedback-special-navi-previous'         => 'previous',
	'ui-feedback-special-navi-next'             => 'next',
	'ui-feedback-special-navi-all'              => 'all',

	'ui-feedback-special-table-head-none'       => 'none',

	'ui-feedback-special-table-head-id'         => 'ID',
	'ui-feedback-special-table-head-username'   => 'Username',
	'ui-feedback-special-table-head-time'       => 'Timestamp',
	'ui-feedback-special-table-head-type'       => 'Type',
	'ui-feedback-special-table-head-importance' => 'Importance',
	'ui-feedback-special-table-head-happened'   => 'What happened',
	'ui-feedback-special-table-head-task'       => 'Task',
	'ui-feedback-special-table-head-done'       => 'Done',
	'ui-feedback-special-table-head-details'    => 'Details',
	'ui-feedback-special-table-head-status'     => 'Status',
	'ui-feedback-special-table-head-notes'      => 'Notes',

	'ui-feedback-special-tooltip-notify'        => 'This user wants to be notified about status changes',

	'ui-feedback-special-anonymous'             => 'anonymous',


	'ui-feedback-special-stats-head'            => 'Number of shown and clicked requests for feedback:',
	'ui-feedback-special-stats-type-1'          => 'pop-up after edit',
	'ui-feedback-special-stats-type-2'          => 'questionnaire button',
	'ui-feedback-special-stats-type-3'          => 'screenshot button',

	'ui-feedback-special-stats-type'            => 'type',
	'ui-feedback-special-stats-shown'           => 'shown',
	'ui-feedback-special-stats-clicked'         => 'clicked',
	'ui-feedback-special-stats-sent'            => 'sent',

	'ui-feedback-special-screenshot-error'      => 'something went wrong finding the screenshot',


	'ui-feedback-special-review'                => 'Review',
	'ui-feedback-special-previous-notes'        => 'Previous Notes',
	'ui-feedback-special-info'                  => 'Info',


);

$messages[ 'qqq' ] = array(
	'uifeedback'                                => 'UI-Feedback',

	'ui-feedback-desc'                          => 'This extension allows Users to give feedback about the user interface',

	'ui-feedback-headline'                      => 'Feedback',
	'ui-feedback-scr-headline'                  => 'Feedback',

	'ui-feedback-task-label'                    => 'I wanted to:',
	'ui-feedback-task-1'                        => 'add/edit an item', // item
	'ui-feedback-task-2'                        => 'add/edit a label', // label
	'ui-feedback-task-3'                        => 'add/edit a description', // description
	'ui-feedback-task-4'                        => 'add/edit an alias', // alias
	'ui-feedback-task-5'                        => 'add/edit links', // links
	'ui-feedback-task-6'                        => 'search', // search
	'ui-feedback-task-7'                        => 'other:', // other

	'ui-feedback-done-label'                    => 'Were you able to complete your task?',

	'ui-feedback-good-label'                    => 'What happened while you were editing?',
	'ui-feedback-bad-label'                     => 'What behavior have you been expecting?',
	'ui-feedback-comment-label'                 => 'Please give us some more details:',

	'ui-feedback-happened-label'                => 'Tell us what happened:',
	'ui-feedback-happened-1'                    => 'Something did not work as expected',
	'ui-feedback-happened-2'                    => 'I got confused',
	'ui-feedback-happened-3'                    => 'I am missing a feature',
	'ui-feedback-happened-4'                    => 'Something else',


	'ui-feedback-importance-label'              => 'How important is it for you:',
	'ui-feedback-importance-1'                  => 'not important',
	'ui-feedback-importance-5'                  => 'very important',

	'ui-feedback-anonym-label'                  => 'I want to post it privately.',
	'ui-feedback-anonym-help'                   => 'Check this box if you don\'t want to share your username. Please note that we will not be able to keep you updated on your submitted issue if you choose to remain anonymous.',
	'ui-feedback-notify-label'                  => 'I want to be updated on this issue.',
	'ui-feedback-notify-help'                   => 'We will leave you a note on your userpage when we work on your issue.',
	'ui-feedback-notify-sent'                   => 'Feedback sent <br/><br/><small>See <a href="$1">Feedback-Table</a></small>',


	'ui-feedback-yes'                           => 'yes',
	'ui-feedback-no'                            => 'no',

	'ui-feedback-problem-reset'                 => 'reset',
	'ui-feedback-problem-send'                  => 'send',
	'ui-feedback-problem-close'                 => 'close',
	'ui-feedback-problem-cancel'                => 'cancel',

	'ui-feedback-highlight-label'               => 'Click and drag an area to help us, to understand your feedback',

	'ui-feedback-yellow'                        => 'Highlight areas that are relevant.',
	'ui-feedback-black'                         => 'Blackout any personal information.',

	'ui-feedback-help-text'                     => 'You can highlight and blackout areas on the page to give us a hint where to look at',

	'ui-feedback-prerender-text1'               => 'A screenshot will now be rendered and uploaded to the server. That could take some time.',
	'ui-feedback-prerender-text2'               => 'Please don\'t close the browser until you see the message "Feedback sent".',


	/*Specialpage texts*/
	'ui-feedback-special-feedback'              => 'Feedback',
	'ui-feedback-special-stats'                 => 'Stats',

	'ui-feedback-special-nothing-found'         => 'message if no feedback item is found',
	'ui-feedback-special-found'                 => 'Text for the number of found feedback-items, takes the number as a parameter ',

	'ui-feedback-special-none'                  => 'none',


	'ui-feedback-special-no-permission'         => 'You have not the right permissions to see that Page',

	'ui-feedback-special-happened-1'            => 'did not work as expected',
	'ui-feedback-special-happened-2'            => 'got confused',
	'ui-feedback-special-happened-3'            => 'missing feature',
	'ui-feedback-special-happened-4'            => 'other',

	'ui-feedback-special-yes'                   => 'yes',
	'ui-feedback-special-no'                    => 'no',

	'ui-feedback-special-status-open'           => 'open',
	'ui-feedback-special-status-in-review'      => 'in review',
	'ui-feedback-special-status-closed'         => 'closed',
	'ui-feedback-special-status-declined'       => 'declined',

	'ui-feedback-special-filter'                => 'Filter',

	'ui-feedback-special-undefined'             => 'undefined',

	'ui-feedback-special-type-screenshot'       => 'Screenshot',
	'ui-feedback-special-type-questionnaire'    => 'Questionnaire',

	'ui-feedback-special-top5-users'            => 'Users with most submissions (by closed feedback):',

	'ui-feedback-special-navi-previous'         => 'previous',
	'ui-feedback-special-navi-next'             => 'next',
	'ui-feedback-special-navi-all'              => 'all',

	'ui-feedback-special-table-head-none'       => 'none',

	'ui-feedback-special-table-head-id'         => 'ID',
	'ui-feedback-special-table-head-username'   => 'Username',
	'ui-feedback-special-table-head-time'       => 'Timestamp',
	'ui-feedback-special-table-head-type'       => 'Type',
	'ui-feedback-special-table-head-importance' => 'Importance',
	'ui-feedback-special-table-head-happened'   => 'What happened',
	'ui-feedback-special-table-head-task'       => 'Task',
	'ui-feedback-special-table-head-done'       => 'Done',
	'ui-feedback-special-table-head-details'    => 'Details',
	'ui-feedback-special-table-head-status'     => 'Status',
	'ui-feedback-special-table-head-notes'      => 'Notes',

	'ui-feedback-special-tooltip-notify'        => 'This user wants to be notified about status changes',

	'ui-feedback-special-anonymous'             => 'anonymous',


	'ui-feedback-special-stats-head'            => 'Number of shown and clicked requests for feedback:',
	'ui-feedback-special-stats-type-1'          => 'pop-up after edit',
	'ui-feedback-special-stats-type-2'          => 'questionnaire button',
	'ui-feedback-special-stats-type-3'          => 'screenshot button',

	'ui-feedback-special-stats-type'            => 'type',
	'ui-feedback-special-stats-shown'           => 'shown',
	'ui-feedback-special-stats-clicked'         => 'clicked',
	'ui-feedback-special-stats-sent'            => 'sent',


	'ui-feedback-special-review'                => 'Review',
	'ui-feedback-special-previous-notes'        => 'Previous Notes',
	'ui-feedback-special-info'                  => 'Info',


);


$messages[ 'qqq' ] = array(
	'uifeedback'                                => 'UI-Feedback', //TODO

	'ui-feedback-desc'                          => 'This extension allows users to give feedback about the user interface',

	'ui-feedback-headline'                      => 'headline of the pop-up window showing the questionnaire',
	'ui-feedback-scr-headline'                  => 'headline of the pop-up window showing the screenshot method',

	'ui-feedback-task-label'                    => 'label of the following drop-down-list asking for which one of the functions provided by Wikidata the user was attending to do on the Website',
	'ui-feedback-task-1'                        => 'element #1 saying the user wanted to add or edit an item',
	'ui-feedback-task-2'                        => 'element #2 saying the user wanted to add or edit the label',
	'ui-feedback-task-3'                        => 'element #3 saying the user wanted to add or edit the description',
	'ui-feedback-task-4'                        => 'element #4 saying the user wanted to add or edit an alias',
	'ui-feedback-task-5'                        => 'element #5 saying the user wanted to add or edit links',
	'ui-feedback-task-6'                        => 'element #6 saying the user wanted to use the search function',
	'ui-feedback-task-7'                        => 'element #7 saying the user wanted to do something else (not listed)',

	'ui-feedback-done-label'                    => 'label of the following two radio buttons asking whether the user could finish what he wanted to do on the website or not',

	'ui-feedback-comment-label'                 => 'label of the following text field begging the user to provide more information about task and problem',

	'ui-feedback-happened-label'                => 'label of the following four radio buttons asking for what was disturbing or interrupting while working on the task the user is reporting now',
	'ui-feedback-happened-1'                    => 'element #1 saying the user was dealing with something that didn\'t operate/behave as awaited',
	'ui-feedback-happened-2'                    => 'element #2 saying the user got confused/ baffled during a task',
	'ui-feedback-happened-3'                    => 'element #3 saying the user requires any feature',
	'ui-feedback-happened-4'                    => 'element #4 saying the user wanted to do something different from the previous elements',


	'ui-feedback-importance-label'              => 'label of the following scale of five radio buttons between \'not important\' and \'very important\'',
	'ui-feedback-importance-1'                  => 'label of the left side of the scale telling the reported problem is not that essential for the user',
	'ui-feedback-importance-5'                  => 'label of the right side of the scale saying the reported problem is a quite grave one for the user',

	'ui-feedback-anonym-label'                  => 'label of the checkbox on its left saying the user wants to send the report anonymously',
	'ui-feedback-anonym-help'                   => 'tooltip of the label on its left telling the user is able to not give notice of the username, but in that case it is impossible to keep him updated on the reported issue',
	'ui-feedback-notify-label'                  => 'lable of the checkbox on it\'s left saying that the user is willing to get updates on the revision of his/ her reported issue',
	'ui-feedback-notify-help'                   => 'tooltip of the label on its left telling that the user will be informed on his/ her userpage as soon as somebody is working on the reported issue',

	'ui-feedback-notify-postedit'               => 'notification after an edit in wikidata was made to share feedback',

	'ui-feedback-yes'                           => 'label of the left of two radio buttons saying \'yes\' to approve',
	'ui-feedback-no'                            => 'label of the right of two label buttons saying \'no\' to deny',

	'ui-feedback-problem-reset'                 => 'label of the left button at the bottom of the window to reset the form to its blank state',
	'ui-feedback-problem-send'                  => 'label of the right button at the bottom of a window to submit and send the report',
	'ui-feedback-problem-cancel'                => 'label of the button used in the screenshot confirmation dialogue to cancel reporting',

	'ui-feedback-highlight-label'               => 'challenge description of the two following radio buttons telling that the user can draw areas by click and drag to support the comprehensibility of the feedback report',
	'ui-feedback-yellow'                        => 'label of the radio button on its left to choose this one if the user wants to point out the interface elements referred to the report',
	'ui-feedback-black'                         => 'label of the radio button on its left to blackout areas of the screen to blur personal information or areas not important for the issue',

	'ui-feedback-help-headline'                 => 'headline saying what kind of problem is worth reporting',
	'ui-feedback-help-subheading'               => 'headline telling how to use the extension',
	'ui-feedback-help-text-top'                 => 'text saying which interface elements and interactions are worth to be reported followed by five bulletpoints / bulletpoint #1 says if it makes the accomplishment impossible / bulletpoint #2 says if it has an effect on performance and is responsible for any delay / bulletpoint #3 says if it is not obvious and needs the user\'s suggestion to be done / bulletpoint #4 says if it is just confusing or frustrating the user / bulletpoint #5 says it is not a major problem but annoying anyways',
	'ui-feedback-help-text-bottom'              => 'text referring to the "How to Use"-headline saying that the user can highlight and blackout areas to support the written report and make obvious what she/ he is talking about',

	'ui-feedback-prerender-headline'            => 'headline of the modal dialogue saying to confirm the screenshot-report',
	'ui-feedback-prerender-text1'               => 'text of the modal dialogue saying that the screenshot is going to be rendered an sent to the server and that this process may endure a little while',
	'ui-feedback-prerender-text2'               => 'advice that the user is pleased not to close the internet browser until the user sees a window telling them that her/ his report has been sent',


	/*Specialpage texts*/
	'ui-feedback-special-feedback'              => 'headline of the content area showing the spreadsheet of the reports',
	'ui-feedback-special-stats'                 => 'headline of the area above showing the users with the most submissions (sorted by closed feedback)',

	'ui-feedback-special-nothing-found'         => 'message after using some filters that did not find any matches',
	'ui-feedback-special-found'                 => 'message that shows up when using the filter ejected any matches, followed by the number of matches and their label which is item here',
	'ui-feedback-special-items'                 => 'message that shows up when using the filter ejected any matches, following the number of matches as their label',
	'ui-feedback-special-none'                  => 'placeholder for empty content text fields on the specialpage',


	'ui-feedback-special-no-permission'         => 'message showing up if the user is not allowed to view this page',

	'ui-feedback-special-happened-1'            => '\'What happened\' column content #1 saying form the user was dealing with something that didn\'t operate/ behave as awaited',
	'ui-feedback-special-happened-2'            => '\'What happened\' column content #2 saying the user got confused/ baffled during a task',
	'ui-feedback-special-happened-3'            => '\'What happened\' column content #3 saying the user requires any feature',
	'ui-feedback-special-happened-4'            => '\'What happened\' column content #4 saying the user wanted to do something different',

	'ui-feedback-special-yes'                   => '\'Done\' column content #1 saying the user approved by "yes"', #
	'ui-feedback-special-no'                    => '\'Done\' column content #2 saying the user denied by "no"', #

	'ui-feedback-special-status-open'           => '\'Status\' column content #1 labeling the issue as not yet in process',
	'ui-feedback-special-status-in-review'      => '\'Status\' column content #2 labeling the issue as in process',
	'ui-feedback-special-status-closed'         => '\'Status\' column content #3 labeling the issue as processed and finished',
	'ui-feedback-special-status-declined'       => '\'Status\' column content #4 labeling the issue as declined when it\'s unimportant or spam',

	'ui-feedback-special-filter'                => 'headline of the filter area of the specialpage',

	'ui-feedback-special-undefined'             => 'label of filter checkbox that finally shows the issues sent without any statement of importance',

	'ui-feedback-special-type-screenshot'       => 'label of a filter checkbox to show all the issues that used the screenshot method',
	'ui-feedback-special-type-questionnaire'    => 'label of a filter checkbox to show all the issues that used the questionnaire method',

	'ui-feedback-special-top5-users'            => 'message telling that the five users with the most submitted feedback are listed by closed issues',

	'ui-feedback-special-navi-previous'         => 'link on the detail page of an issue to view the page of the previous issue',
	'ui-feedback-special-navi-next'             => 'link on the detail page of an issue to view the page of the next issue',
	'ui-feedback-special-navi-all'              => 'link to vie the full spreadsheet of all issues',

	'ui-feedback-special-table-head-none'       => 'text for empty freetexts',

	'ui-feedback-special-table-head-id'         => 'table column headline listing the issue IDs',
	'ui-feedback-special-table-head-username'   => 'table column headline listing the related Usernames',
	'ui-feedback-special-table-head-time'       => 'table column headline listing the time of submitting an report',
	'ui-feedback-special-table-head-type'       => 'table column headline listing whether the feedback was reported by using the questionnaire or the screenshot method',
	'ui-feedback-special-table-head-importance' => 'table column headline listing the statements regarding the issue\'s importance',
	'ui-feedback-special-table-head-happened'   => 'table column headline listing what kind of problem the user had',
	'ui-feedback-special-table-head-task'       => 'table column headline listing the task the user was working on',
	'ui-feedback-special-table-head-done'       => 'table column headline listing whether it was possible to complete the task or not',
	'ui-feedback-special-table-head-details'    => 'table column headline listing the additional information provided by the user',
	'ui-feedback-special-table-head-status'     => 'table column headline listing the current processing status of the issue',
	'ui-feedback-special-table-head-notes'      => 'table column headline listing notes made by the developer',

	'ui-feedback-special-tooltip-notify'        => 'advice that tells the developer if the user wants to be updated on the issue',

	'ui-feedback-special-anonymous'             => 'advice shown instead of a name if the report was sent anonymously',


	'ui-feedback-special-stats-head'            => 'headline for the statistics-table',
	'ui-feedback-special-stats-type-1'          => 'pop-up after edit',
	'ui-feedback-special-stats-type-2'          => 'questionnaire button',
	'ui-feedback-special-stats-type-3'          => 'screenshot button',

	'ui-feedback-special-stats-type'            => 'type',
	'ui-feedback-special-stats-shown'           => 'shown',
	'ui-feedback-special-stats-clicked'         => 'clicked',
	'ui-feedback-special-stats-sent'            => 'sent',

	'ui-feedback-special-screenshot-error'      => 'something went wrong finding the screenshot',


	'ui-feedback-special-review'                => 'headline for the review section',
	'ui-feedback-special-previous-notes'        => 'headline for previous reviews',
	'ui-feedback-special-info'                  => 'label for the freetext of the review',


);
