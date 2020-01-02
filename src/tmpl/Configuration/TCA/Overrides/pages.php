<?php
defined('TYPO3_MODE') or die();

// Additional fields for page
$GLOBALS['TCA']['pages']['columns'] += array(

    'hide_breadcrumb' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:page.hide_breadcrumb',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

    'hide_pagetitle' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:page.hide_pagetitle',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

    'hide_container_class' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:page.hide_container_class',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

    'show_animation' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:page.show_animation',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_breadcrumb', '1', 'after:title'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_pagetitle', '1', 'after:hide_breadcrumb'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_container_class', '1', 'after:hide_pagetitle'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'show_animation', '1', 'after:hide_container_class'
);