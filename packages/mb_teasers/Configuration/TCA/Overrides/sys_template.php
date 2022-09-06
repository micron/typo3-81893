<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'IconTeaser',
            'Icon Teaser',
            'EXT:mb_teasers/Resources/Public/Icons/icons.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'CategoryTeaser',
            'Category Teaser',
            'EXT:mb_teasers/Resources/Public/Icons/category.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'PromotionTiles',
            'Promotion Tiles',
            'EXT:mb_teasers/Resources/Public/Icons/promotion.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'CtaTiles',
            'CTA Tiles',
            'EXT:mb_teasers/Resources/Public/Icons/ctaContact.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'CtaBox',
            'CTA Box',
            'EXT:mb_teasers/Resources/Public/Icons/cta.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'SubpagesTiles',
            'Subpages Tiles',
            'EXT:mb_teasers/Resources/Public/Icons/subPages.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'FormsSelector',
            'Forms Selector',
            'EXT:mb_teasers/Resources/Public/Icons/form.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'CompanyOverviewTiles',
            'Company Overview Tiles',
            'EXT:mb_teasers/Resources/Public/Icons/overviewTiles.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'AccordianTeaser',
            'Accordian Teaser',
            'EXT:mb_teasers/Resources/Public/Icons/accordian.png'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MbTeasers',
            'OverviewTilesWithFilter',
            'Overview Tiles WIth Filter',
            'EXT:mb_teasers/Resources/Public/Icons/overviewFilter.png'

        );
        

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('mb_teasers', 'Configuration/TypoScript', 'Mb Teasers');
    }
);
