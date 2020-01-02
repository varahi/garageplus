<?php

$_CEKEY  = 'ce_mainpage_slider';
$_EXTKEY = 'tmpl';

call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
    $customLanguageFilePrefix = 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "ce_mainpage_slider"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:wizard.mainpage_slider_title',
            'ce_mainpage_slider',
            'content-image'
        ],
        'textmedia',
        'after'
    );
});

$tmp_columns = [
    'tx_slider_item' => [
        'exclude' => true,
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:wizard.mainpage_slider_item',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_tmplcemainslider_item',
            'foreign_field' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'maxitems' => 9999,
            'appearance' => [
                'collapseAll' => 1,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
                'showAllLocalizationLink' => 1
            ],
        ],

    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$tmp_columns);

$GLOBALS['TCA']['tt_content']['types'][$_CEKEY] = [
    'showitem' => '
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,slider_data_speed,
		tx_gridelements_container,tx_gridelements_columns,tx_slider_item,tx_tmplcemainslider_item'
];

