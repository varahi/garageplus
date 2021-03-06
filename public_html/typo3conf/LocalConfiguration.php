<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=2$MTZNRFFqeHdWdlJKVGwxNg$nVX1xfsn0V9elfN7h5jqpHICLd7mo1fhl4RdKX4d47Q',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'typo3_update',
                'driver' => 'mysqli',
                'host' => '172.17.0.1',
                'password' => 'dev',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'gridelements' => 'a:6:{s:20:"additionalStylesheet";s:0:"";s:38:"disableAutomaticUnusedColumnCorrection";s:1:"0";s:25:"disableCopyFromPageButton";s:1:"0";s:19:"disableDragInWizard";s:1:"0";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";}',
            'lfeditor' => 'a:9:{s:16:"beMainModuleName";s:4:"user";s:13:"changeXlfDate";s:1:"1";s:15:"defaultLanguage";s:0:"";s:17:"editModeExtension";s:1:"1";s:9:"extIgnore";s:23:"/^(CVS|.svn|.git|csh_)/";s:12:"extWhitelist";s:0:"";s:27:"pathAdditionalConfiguration";s:37:"typo3conf/AdditionalConfiguration.php";s:11:"searchRegex";s:60:"/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i";s:13:"viewLanguages";s:0:"";}',
            'news' => 'a:17:{s:20:"advancedMediaPreview";s:1:"1";s:11:"archiveDate";s:4:"date";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"categoryRestriction";s:4:"none";s:21:"contentElementPreview";s:1:"1";s:22:"contentElementRelation";s:1:"1";s:19:"dateTimeNotRequired";s:1:"0";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:13:"manualSorting";s:1:"0";s:12:"mediaPreview";s:1:"0";s:13:"prependAtCopy";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:12:"rteForTeaser";s:1:"0";s:24:"showAdministrationModule";s:1:"1";s:12:"showImporter";s:1:"1";s:18:"storageUidImporter";s:1:"1";s:6:"tagPid";s:1:"1";}',
            'powermail' => 'a:8:{s:12:"disableIpLog";s:1:"1";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"0";}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'ru',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'gridelements' => [
            'additionalStylesheet' => '',
            'disableAutomaticUnusedColumnCorrection' => '0',
            'disableCopyFromPageButton' => '0',
            'disableDragInWizard' => '0',
            'nestingInListModule' => '0',
            'overlayShortcutTranslation' => '0',
        ],
        'lfeditor' => [
            'beMainModuleName' => 'user',
            'changeXlfDate' => '1',
            'defaultLanguage' => '',
            'editModeExtension' => '1',
            'extIgnore' => '/^(CVS|.svn|.git|csh_)/',
            'extWhitelist' => '',
            'pathAdditionalConfiguration' => 'typo3conf/AdditionalConfiguration.php',
            'searchRegex' => '/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i',
            'viewLanguages' => '',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => 'none',
            'contentElementPreview' => '1',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'mediaPreview' => '0',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'showImporter' => '1',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'powermail' => [
            'disableBackendModule' => '0',
            'disableIpLog' => '1',
            'disableMarketingInformation' => '0',
            'disablePluginInformation' => '0',
            'disablePluginInformationMailPreview' => '0',
            'enableCaching' => '0',
            'l10n_mode_merge' => '0',
            'replaceIrreWithElementBrowser' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '0',
        ],
        'vhs' => [
            'disableAssetHandling' => '0',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => 'a13353c9918270e95957f78f4abc7fb8a7ea1aa0648e748407e55bec524680e9e56ecf4e49158accc8bc5cd163921fe5',
        'exceptionalErrors' => 12290,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Garageplus',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => '.*',
    ],
];
