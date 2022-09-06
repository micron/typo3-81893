<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile',
        'label' => 'headline',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'headline,subheadline,more_info_link,bg_color',
        'iconfile' => 'EXT:mb_teasers/Resources/Public/Icons/tx_mbteasers_domain_model_tile.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, headline, subheadline, more_info_link, more_info_link_text, tile_image, bg_color, text_color, is_feature',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, headline, subheadline, more_info_link, more_info_link_text, tile_image, bg_color, text_color, is_feature, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_mbteasers_domain_model_tile',
                'foreign_table_where' => 'AND {#tx_mbteasers_domain_model_tile}.{#pid}=###CURRENT_PID### AND {#tx_mbteasers_domain_model_tile}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'headline' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.headline',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                // 'size' => 30,
                // 'eval' => 'trim'
            ],
        ],
        'subheadline' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.subheadline',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'more_info_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.more_info_link',
            'displayCond' => 'USER:Mb\MbTeasers\User\\ConditionMatcher->mbTeasersLayout:0:1',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ],
        ],
        'more_info_link_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.more_info_link_text',
            'displayCond' => 'USER:Mb\MbTeasers\User\\ConditionMatcher->mbTeasersLayout:0:1',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'tile_image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.tile_image',
            'displayCond' => 'USER:Mb\MbTeasers\User\\ConditionMatcher->mbTeasersLayout:0:3',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'tile_image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'bg_color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.bg_color',
            'displayCond' => 'USER:Mb\MbTeasers\User\\ConditionMatcher->mbTeasersLayout:0',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'size' => 10,
            ],
        ],
        'text_color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.text_color',
            'config' => [
                'type' => 'input',
                'renderType' => 'colorpicker',
                'size' => 10,
            ],
        ],
        'is_feature' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.is_feature',
            'displayCond' => 'USER:Mb\MbTeasers\User\\ConditionMatcher->mbTeasersLayout:0:1',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['', 1],
                ],
            ]
        ],
        'sorting_tile' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
