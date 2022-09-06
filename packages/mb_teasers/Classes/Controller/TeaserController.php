<?php

namespace Mb\MbTeasers\Controller;

use Mb\MbTeasers\Domain\Repository\ElementRepository;
use Mb\MbTeasers\Domain\Repository\TileRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Annotation\Inject;

class TeaserController extends ActionController
{

    /**
     * Slider Repository
     *
     * @var TileRepository
     */
    protected $tileRepository;

    /**
     * Element Repository
     *
     * @var ElementRepository
     * @Inject
     */
    protected $elementRepository;

    /**
     * Inject the Slider repository
     *
     * @param TileRepository $tileRepository
     */
    public function injectSliderRepository(TileRepository $tileRepository)
    {
        $this->tileRepository = $tileRepository;
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
     * Shows the iconteaser
     *
     * @return void
     */
    public function showIconTeaserAction(): void
    {
        $languageAspect = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Context\Context::class)->getAspect('language');
        $sys_language_uid = $languageAspect->getId();
        $fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);

        if($sys_language_uid == 0){
            $iconImages = $fileRepository->findByRelation('tt_content', 'image', $this->cObj->data['uid']);
        }else{
            $iconImages = $fileRepository->findByRelation('tt_content', 'image', $this->cObj->data['_LOCALIZED_UID']);
        }
        if (sizeof($iconImages)) {
            $this->view->assign('icons', $iconImages);
        }
        $this->view->assign('data', $this->cObj->data);
    }

    /**
     * Shows the showCategoryTeaser
     *
     * @return void
     */
    public function showCategoryTeaserAction(): void
    {
    }

    /**
     * Shows the showPromotionTiles
     *
     * @return void
     */
    public function showPromotionTilesAction(): void
    {
        $languageAspect = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Context\Context::class)->getAspect('language');
        $sys_language_uid = $languageAspect->getId();
        if($sys_language_uid == 0){
            $this->view->assign('tiles', $this->tileRepository->findByTtContentId($this->cObj->data['uid']));
        }else{
            $this->view->assign('tiles', $this->tileRepository->findByTtContentId($this->cObj->data['_LOCALIZED_UID']));
        }
        $this->view->assign('data', $this->cObj->data);
    }


    /**
     * Shows the showCtaTiles
     *
     * @return void
     */
    public function showCtaTilesAction(): void
    {
        $this->view->assign('data', $this->cObj->data);
    }

    /**
     * Shows the showCtaBox
     *
     * @return void
     */
    public function showCtaBoxAction(): void
    {
        $fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);
        $iconImages = $fileRepository->findByRelation('tt_content', 'image', $this->cObj->data['uid']);
        if (sizeof($iconImages)) {
            $this->view->assign('image', $iconImages[0]);
        }
        $this->view->assign('data', $this->cObj->data);
    }

    /**
     * Shows the showSubpagesTiles
     *
     * @return void
     */
    public function showSubpagesTilesAction(): void
    {
        $languageAspect = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Context\Context::class)->getAspect('language');
        $sys_language_uid = $languageAspect->getId();
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('pages')->createQueryBuilder();
        $pagesArr = $queryBuilder->select('uid', 'title', 'description','subtitle')
            ->from('pages')
            ->where(
            $queryBuilder->expr()->eq('pid', $queryBuilder->createNamedParameter($GLOBALS['TSFE']->id, \PDO::PARAM_INT)),
            $queryBuilder->expr()->eq('sys_language_uid',$sys_language_uid)
            )
            ->orderBy('sorting')
            ->execute()
            ->fetchAll();

        $this->view->assign('currentPageTitle', current($GLOBALS['TSFE']->rootLine)['title']);
        $this->view->assign('subpages', $pagesArr);
    }

    /**
     * Shows the showElements
     *
     * @return void
     */
    public function showElementsAction(): void
    {
        $localizedUid = $this->cObj->data['_LOCALIZED_UID'];
        $this->view->assign('data', $this->cObj->data);
        if(!$localizedUid){
            $this->view->assign('elements', $this->elementRepository->findByTtContentId($this->cObj->data['uid']));
        }else{
            $this->view->assign('elements', $this->elementRepository->findByTtContentId($localizedUid));
        }
    }
}
