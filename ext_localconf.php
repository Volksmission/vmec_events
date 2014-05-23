<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VMeC.' . $_EXTKEY,
	'Events',
	array(
		'Event' => 'list, show',
		'Participant' => 'list, show, create, new, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Participant' => 'create, update, delete',
		
	)
);
