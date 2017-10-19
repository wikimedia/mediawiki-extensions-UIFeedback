<?php
/**
 * UiFeedback Extension for MediaWiki.
 *
 * @file
 * @ingroup Extensions
 *
 * @license MIT
 */

$wgExtensionCredits[ 'other' ][ ] = array(
	'path'           => __FILE__,
	'name'           => 'UiFeedback',
	'version'        => '0.3.0',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:UIFeedback',
	'author'         => array( 'lbenedix', ),
	'descriptionmsg' => 'ui-feedback-desc'
);

/* Setup */

// Register files
$wgMessagesDirs['UiFeedback'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles[ 'UIFeedbackAlias' ] = __DIR__ . '/UIFeedback.alias.php';

// add permissions and groups
// $wgGroupPermissions['user']['userrights'] = true;

// TODO!!! change the permission before deployment
$wgGroupPermissions[ '*' ][ 'read_uifeedback' ] = true;
$wgGroupPermissions[ '*' ][ 'upload' ]          = true;
//$wgGroupPermissions['user']['read_uifeedback'] = true;
//$wgGroupPermissions['user']['upload'] = true;

$wgGroupPermissions[ 'UIFeedback_Administator' ][ 'write_uifeedback' ] = true;

// Register modules
$wgResourceModules[ 'jquery.htmlfeedback' ] = array(
	'scripts'	=> array(
		'resources/lib.canvas-to-blob.js',
		'resources/lib.html2canvas.js',
		'resources/lib.jquery.htmlfeedback.js',
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'UIFeedback',
);
$wgResourceModules[ 'ext.uiFeedback' ] = array(
	'scripts'       => array(
		'resources/ext.uiFeedback.js',
	),
	'styles'        => array( 'resources/ext.uiFeedback.css' ),
	'dependencies'  => array(
		'user.groups',
		'user.options',

		'jquery.cookie',
		'jquery.ui.draggable',
		'jquery.client',
		'jquery.htmlfeedback',

		'mediawiki.api',
		'mediawiki.util',
	),
	'messages'      => array(
		'ui-feedback-headline',
		'ui-feedback-scr-headline',
		'ui-feedback-task-label',
		'ui-feedback-task-0', // nothing
		'ui-feedback-task-1', // search
		'ui-feedback-task-2', // item
		'ui-feedback-task-3', // label
		'ui-feedback-task-4', // description
		'ui-feedback-task-5', // alias
		'ui-feedback-task-6', // links
		'ui-feedback-task-7', // other

		'ui-feedback-done-label',

		'ui-feedback-comment-label',

		'ui-feedback-happened-label',
		'ui-feedback-happened-1',
		'ui-feedback-happened-2',
		'ui-feedback-happened-3',
		'ui-feedback-happened-4',

		'ui-feedback-importance-label',
		'ui-feedback-importance-1',
		'ui-feedback-importance-5',

		'ui-feedback-anonym-label',
		'ui-feedback-anonym-help',
		'ui-feedback-notify-label',
		'ui-feedback-notify-help',
		'ui-feedback-notify-postedit',
		'ui-feedback-notify-upload-sent',
		'ui-feedback-notify-upload-fail',
		'ui-feedback-notify-upload-progress',
		'ui-feedback-notify-sent',

		'ui-feedback-problem-send',
		'ui-feedback-problem-reset',
		'ui-feedback-problem-cancel',

		'ui-feedback-yes',
		'ui-feedback-no',

		'ui-feedback-highlight-label',
		'ui-feedback-yellow',
		'ui-feedback-black',
		'ui-feedback-sticky',

		'ui-feedback-help-headline',
		'ui-feedback-help-subheading',
		'ui-feedback-help-text-top',
		'ui-feedback-help-text-bottom',

		'ui-feedback-prerender-headline',
		'ui-feedback-prerender-text1',
		'ui-feedback-prerender-text2',
	),
	'position'      => 'top',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'UIFeedback',
);

# Schema updates for update.php
$wgHooks[ 'LoadExtensionSchemaUpdates' ][ ] = 'createUIFeedbackTable';
function createUIFeedbackTable( DatabaseUpdater $updater ) {
	$updater->addExtensionTable(
		'uifeedback',
		__DIR__ . '/table.sql', true );
	return true;
}

// Register hooks
$wgHooks[ 'BeforePageDisplay' ][ ] = 'uifeedbackBeforePageDisplay';
function uifeedbackBeforePageDisplay( &$out ) {
	if( $out->getUser()->isAllowed( 'read_uifeedback' ) ) {
		$out->addModules( array(
			'ext.uiFeedback',
			'jquery.ui.draggable'
		) );
	}
	return true;
}

// Register SpecialPage
$wgAutoloadClasses[ 'SpecialUiFeedback' ]     = __DIR__ . '/SpecialUiFeedback.php';

$wgAutoloadClasses[ 'UiFeedbackAPI' ] = __DIR__ . '/ApiUiFeedback.php';
$wgAPIModules[ 'uifeedback' ]         = 'UiFeedbackAPI';

$wgSpecialPages[ 'UiFeedback' ] = 'SpecialUiFeedback';

$wgAvailableRights[] = 'read_uifeedback';
$wgAvailableRights[] = 'write_uifeedback';

// $wgHooks['GetPreferences'][] = 'uifeedbackPrefHook';
// function uifeedbackPrefHook( $user, &$preferences ) {
//     // A checkbox
//     $preferences['show_wb_postedit_notification'] = array(
//         'type' => 'toggle',
//         'label-message' => 'show the WikiData postedit notification for Feedback',
//         'section' => 'misc',
//     );

//     // Required return value of a hook function.
//     return true;
// }
