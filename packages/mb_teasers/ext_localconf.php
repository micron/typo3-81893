<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'IconTeaser',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showIconTeaser'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'CategoryTeaser',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showCategoryTeaser'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'PromotionTiles',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showPromotionTiles'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'CtaTiles',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showCtaTiles'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'CtaBox',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showCtaBox'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'SubpagesTiles',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showSubpagesTiles'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'FormsSelector',
            [
                \Mb\MbTeasers\Controller\TeaserController::class => 'showElements'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'CompanyOverviewTiles',
            [
                \Mb\MbTeasers\Controller\CompanyOverviewController::class => 'showCompanyOverview'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'AccordianTeaser',
            [
                \Mb\MbTeasers\Controller\AccordianTeaserController::class => 'accordianTeaser'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MbTeasers',
            'OverviewTilesWithFilter',
            [
                \Mb\MbTeasers\Controller\OverviewTilesWithFilterController::class => 'overviewTilesWithFilter'
            ],
            // non-cacheable actions
            [

            ],
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.common {
                    elements {
                        mbteasers_iconteaser {
                            iconIdentifier = mb_teasers-plugin-icons
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_iconteaser.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_iconteaser.description
                            tt_content_defValues {
                                CType = mbteasers_iconteaser
                            }
                        }
                        mbteasers_categoryteaser {
                            iconIdentifier = mb_teasers-plugin-category
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_categoryteaser.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_categoryteaser.description
                            tt_content_defValues {
                                CType = mbteasers_categoryteaser
                            }
                        }
                        mbteasers_promotiontiles {
                            iconIdentifier = mb_teasers-plugin-promotionTile
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_promotiontiles.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_promotiontiles.description
                            tt_content_defValues {
                                CType = mbteasers_promotiontiles
                            }
                        }
                        mbteasers_ctatiles {
                            iconIdentifier = mb_teasers-plugin-ctaContact
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_ctatiles.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_ctatiles.description
                            tt_content_defValues {
                                CType = mbteasers_ctatiles
                            }
                        }
                        mbteasers_ctabox {
                            iconIdentifier = mb_teasers-plugin-cta
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_ctabox.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_ctabox.description
                            tt_content_defValues {
                                CType = mbteasers_ctabox
                            }
                        }
                        mbteasers_subpagestiles {
                            iconIdentifier = mb_teasers-plugin-subPages
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_subpagestiles.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_subpagestiles.description
                            tt_content_defValues {
                                CType = mbteasers_subpagestiles
                            }
                        }
                        mbteasers_formsselector {
                            iconIdentifier = mb_teasers-plugin-form
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_formsselector.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_formsselector.description
                            tt_content_defValues {
                                CType = mbteasers_formsselector
                            }
                        }
                        mbteasers_companyoverviewtiles {
                            iconIdentifier = mb_teasers-plugin-overview-tiles
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_companyoverviewtiles.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_companyoverviewtiles.description
                            tt_content_defValues {
                                CType = mbteasers_companyoverviewtiles
                            }
                        }
                        mbteasers_accordianteaser {
                            iconIdentifier = mb_teasers-plugin-accordian
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_accordianteaser.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_accordianteaser.description
                            tt_content_defValues {
                                CType = mbteasers_accordianteaser
                            }
                        }

                        mbteasers_overviewtileswithfilter {
                            iconIdentifier = mb_teasers-plugin-overview-filter
                            title = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_overviewtileswithfilter.name
                            description = LLL:EXT:mb_teasers/Resources/Private/Language/locallang_db.xlf:tx_mb_teasers_overviewtileswithfilter.description
                            tt_content_defValues {
                                CType = mbteasers_overviewtileswithfilter
                            }
                        }

                    }
                    show = *
                }
           }'
        );

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'mb_teasers-plugin-teaser',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/user_plugin_teaser.svg']
        );

        $iconRegistry->registerIcon(
            'mb_teasers-plugin-accordian',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/accordian.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-overview-tiles',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/overviewTiles.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-overview-filter',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/overviewFilter.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-form',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/form.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-subPages',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/subPages.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-cta',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/cta.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-ctaContact',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/ctaContact.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-promotionTile',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/promotion.png']
        );
        
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-category',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/category.png']
        );
        $iconRegistry->registerIcon(
            'mb_teasers-plugin-icons',
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:mb_teasers/Resources/Public/Icons/icons.png']
        );
      
    }
);
