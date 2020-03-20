<?php

class UIFeedbackHooks {
	/**
	 * @param DatabaseUpdater $updater
	 */
	function createUIFeedbackTable( DatabaseUpdater $updater ) {
		$updater->addExtensionTable( 'uifeedback',
			__DIR__ . '/../sql/table.sql', true );
	}

	/**
	 * @param OutputPage $out
	 */
	function uifeedbackBeforePageDisplay( $out ) {
		if ( $out->getUser()->isAllowed( 'read_uifeedback' ) ) {
			$out->addModules( [
				'ext.uiFeedback',
				'jquery.ui.draggable',
				'jquery.ui.resizable'
			] );
		}
	}
}
