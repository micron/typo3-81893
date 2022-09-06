<?php

namespace Mb\MbTeasers\User;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 *
 * @param array $configuration
 * @return bool
 */
class ConditionMatcher {

    public function mbTeasersLayout(array $configuration){
        
        $response = false;
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tt_content');
        $statement = $queryBuilder
        ->select('layout')
        ->from('tt_content')
        ->where(
            $queryBuilder->expr()->eq("uid", intval($configuration['record']['tt_content_uid']))
        )
        ->execute()->fetch();

        if(in_array($statement['layout'], $configuration['conditionParameters'])) {
            $response = true;
        }

        return $response;

    }



}
