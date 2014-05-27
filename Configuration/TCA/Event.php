<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_vmecevents_domain_model_event'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_vmecevents_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, start, end, all_day, title, teaser, description, image, location, location_address, registration_email, participants',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, start, end, all_day, title, teaser, description;;;richtext:rte_transform[mode=ts_links], image, --div--;Veranstaltungsort, location, location_address, --div--;Anmeldungen, registration_email, participants, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_vmecevents_domain_model_event',
				'foreign_table_where' => 'AND tx_vmecevents_domain_model_event.pid=###CURRENT_PID### AND tx_vmecevents_domain_model_event.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'start' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.start',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime,required',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'end' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.end',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime,required',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'all_day' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.all_day',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'teaser' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.teaser',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.location',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'location_address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.location_address',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'registration_email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.registration_email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'participants' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vmec_events/Resources/Private/Language/locallang_db.xlf:tx_vmecevents_domain_model_event.participants',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_vmecevents_domain_model_participant',
				'foreign_field' => 'event',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
	),
);
