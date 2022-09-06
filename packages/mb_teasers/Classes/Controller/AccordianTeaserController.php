<?php

namespace Mb\MbTeasers\Controller;

use Mb\MbTeasers\Domain\Repository\AccordianTeaserRepository;
use Mb\MbTeasers\Domain\Repository\ElementRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Annotation\Inject;

class AccordianTeaserController extends ActionController
{

    /**
     * Slider Repository
     *
     * @var AccordianTeaserRepository
     */
    protected $accordianteaserRepository;

    /**
     * Inject the Accordian Teaser repository
     *
     * @param AccordianTeaserRepository $accordianteaserRepository
     */
    public function injectSliderRepository(AccordianTeaserRepository $accordianteaserRepository)
    {
        $this->accordianteaserRepository = $accordianteaserRepository;
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
    public function accordianTeaserAction(): void
    {
        $this->view->assign('data', $this->cObj->data);
        $this->view->assign('tiles', $this->accordianteaserRepository->findByTtContentId($this->cObj->data['uid']));
    }


}
