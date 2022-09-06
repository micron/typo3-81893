<?php

namespace Mb\MbTeasers\Controller;

use Mb\MbTeasers\Domain\Repository\CompanytileRepository;
use Mb\MbTeasers\Domain\Repository\ElementRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Annotation\Inject;

class CompanyOverviewController extends ActionController
{

    /**
     * Slider Repository
     *
     * @var CompanytileRepository
     */
    protected $companytileRepository;

    /**
     * Inject the Company Tile repository
     *
     * @param CompanytileRepository $companytileRepository
     */
    public function injectSliderRepository(CompanytileRepository $companytileRepository)
    {
        $this->companytileRepository = $companytileRepository;
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
    public function showCompanyOverviewAction(): void
    {
        $this->view->assign('data', $this->cObj->data);
        $localizedUid = $this->cObj->data['_LOCALIZED_UID'];
        if(!$localizedUid){
            $this->view->assign('tiles', $this->companytileRepository->findByTtContentId($this->cObj->data['uid']));
        }else{
            $this->view->assign('tiles', $this->companytileRepository->findByTtContentId($this->cObj->data['_LOCALIZED_UID']));
        }
    }


}
