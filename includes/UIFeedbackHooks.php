<?php

class UIFeedbackHooks {
	function createUIFeedbackTable( DatabaseUpdater $updater ) {
		$updater->addExtensionTable( 'uifeedback',
			__DIR__ . '/../sql/table.sql', true );
		return true;
	}
	function uifeedbackBeforePageDisplay( &$out ) {
		if ( $out->getUser()->isAllowed( 'read_uifeedback' ) ) {
			$out->addModules( [
				'ext.uiFeedback',
				'jquery.ui.draggable',
				'jquery.ui.resizable'
			] );
		}
	return true;
	}
}
