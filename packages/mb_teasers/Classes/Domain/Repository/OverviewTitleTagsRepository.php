<?php

namespace Mb\MbTeasers\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class OverviewTitleTagsRepository extends Repository
{
    public function findByTtContentId($uid)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('tt_content_uid', $uid));
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->setOrderings(array('sorting_tile' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
        return $query->execute();
    }

}
