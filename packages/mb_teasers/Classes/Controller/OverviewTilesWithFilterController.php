<?php

namespace Mb\MbTeasers\Controller;

use Mb\MbTeasers\Domain\Repository\OverviewTitleTagsRepository;
use Mb\MbTeasers\Domain\Repository\ElementRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Annotation\Inject;

class OverviewTilesWithFilterController extends ActionController
{

    /**
     * Slider Repository
     *
     * @var OverviewTitleTagsRepository
     */
    protected $overviewTitleTagsRepository;

    /**
     * Inject the Company Tile repository
     *
     * @param OverviewTitleTagsRepository $overviewTitleTagsRepository
     */
    public function injectSliderRepository(OverviewTitleTagsRepository $overviewTitleTagsRepository)
    {
        $this->overviewTitleTagsRepository = $overviewTitleTagsRepository;
    }

    /**
     * initializeAction
     *
     * @return void
     */
    public function initializeAction()
    {
        $this->initContentObject();
    }

    /**
     * to initiate content object
     */
    public function initContentObject()
    {
        $this->cObj = $this->configurationManager->getContentObject();
    }

    /**
     * Shows the CompanyOverview tiles
     *
     * @return void
     */
    public function overviewTilesWithFilterAction(): void
    {
        $overviewTileTags = $this->overviewTitleTagsRepository->findByTtContentId($this->cObj->data['uid']);
        $this->view->assign('allFilteredTiles', $overviewTileTags);
    }
}
