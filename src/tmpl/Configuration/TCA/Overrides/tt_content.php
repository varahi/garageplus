<?php
defined('TYPO3_MODE') or die();

// Add new fields to tt_content for common use of custom CTypes

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [

    'teaser_link' => [
            'label' => 'LL:EXT:cms/locallang_ttc.xml:header_link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ],
        ],

        'slider_data_speed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:tt_content.slider_data_speed',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],

    ]
);

