<?php

$GLOBALS['TCA']['tt_content']['types']['mbteasers_iconteaser'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
            image,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,starttime,endtime,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
    'columnsOverrides' => [
        'image' => [
            'label' => 'Icon Image',
            'config' => [
                'overrideChildTca' => [
                    'columns' => [
                        'description' => [
                            'config' => [
                                'type' => 'text',
                                'enableRichtext' => true,
                            ],
                        ],
                    ],
                ],
            ]
        ]
    ],
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_categoryteaser'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,starttime,endtime,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
];

$slideTca = [
    'mb_promotion_tiles' => [
        'exclude' => true,
        'label' => 'Tile',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'tt_content_uid',
            'foreign_table' => 'tx_mbteasers_domain_model_tile',
            'foreign_sortby' => 'sorting_tile',
            'minitems' => '1',
            'type' => 'inline',
        ],
    ],


    'mb_company_tiles' => [
        'exclude' => true,
        'label' => 'Tile',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'tt_content_uid',
            'foreign_table' => 'tx_mbteasers_domain_model_companytile',
            'foreign_sortby' => 'sorting_tile',
            'minitems' => '1',
            'type' => 'inline',
        ],
    ],


    'mb_accordian_teaser' => [
        'exclude' => true,
        'label' => 'Title',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'tt_content_uid',
            'foreign_table' => 'tx_mbteasers_domain_model_accordianteaser',
            'foreign_sortby' => 'sorting_tile',
            'minitems' => '1',
            'type' => 'inline',
        ],
    ],

    'mb_overview_tile_tags' => [
        'exclude' => true,
        'label' => 'Tile',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'tt_content_uid',
            'foreign_table' => 'tx_mbteasers_domain_model_overviewtitletags',
            'foreign_sortby' => 'sorting_tile',
            'minitems' => '1',
            'type' => 'inline',
        ],
    ],


    'bg_color' => [
        'exclude' => true,
        'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.bg_color',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
            'size' => 10,
        ],
    ],
    'teaser_link_text' => [
        'exclude' => true,
        'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.more_info_link_text',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'mb_teasers_elements' => [
        'exclude' => true,
        'label' => 'Add new element',
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'tt_content_uid',
            'foreign_table' => 'tx_mbteasers_domain_model_element',
            'foreign_sortby' => 'sorting_tile',
            'minitems' => '1',
            'type' => 'inline',
        ],
    ],
    'is_feature' => [
        'exclude' => true,
        'label' => 'LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mbteasers_domain_model_tile.is_feature',
        'config' => [
            'type' => 'check',
            'items' => [
                ['', 1],
            ],
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $slideTca);

$GLOBALS['TCA']['tt_content']['types']['mbteasers_promotiontiles'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        layout,mb_promotion_tiles,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
    'columnsOverrides' => [
        'layout' => [
            'onChange' => 'reload',
            'config' => [
                'items' => [
                    ['promotion tiles', 0],
                    ['News overview page', 1],
                    ['Solution tile', 3]
                ],
                'default' => 0,
            ]
        ]
    ]
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_ctabox'] = [
    'previewRenderer' => \TYPO3\CMS\Frontend\Preview\TextpicPreviewRenderer::class,
    'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                teaser_link_text,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                    bg_color,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
            ]
        ],
        'imageorient' => [
            'config' => [
                'default' => 25,
            ]
        ],
        'image' => [
            'config' => [
                'maxitems' => 1
            ]
        ]
    ]
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_subpagestiles'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_formsselector'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        header,mb_teasers_elements,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_companyoverviewtiles'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        mb_company_tiles,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_accordianteaser'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        mb_accordian_teaser,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_overviewtileswithfilter'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        mb_overview_tile_tags,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
];

$GLOBALS['TCA']['tt_content']['types']['mbteasers_ctatiles'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        header_layout,
        --linebreak--,
        subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,
        --linebreak--,
        header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
        --linebreak--,
        teaser_link_text,
        --linebreak--,
        is_feature,
        --linebreak--,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            hidden,starttime,endtime,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            description,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,',
    'columnsOverrides' => [
        'teaser_link_text' => [
            'label' => 'Link Text'
        ]
    ]
];
