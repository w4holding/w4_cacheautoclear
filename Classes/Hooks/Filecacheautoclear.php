<?php

namespace W4Services\W4Cacheautoclear\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Cache\CacheManager;
use TYPO3\CMS\Core\Utility\File\ExtendedFileUtility;
use TYPO3\CMS\Core\Utility\File\ExtendedFileUtilityProcessDataHookInterface;

class Filecacheautoclear implements ExtendedFileUtilityProcessDataHookInterface
{
    public function processData_postProcessAction($action, array $cmdArr, array $result, ExtendedFileUtility $parentObject): void
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tt_content')->createQueryBuilder();

        $pagesToBeCleared = $queryBuilder
            ->select('pid')
            ->from('tt_content')
            ->where(
                $queryBuilder->expr()->eq('CType', $queryBuilder->createNamedParameter('uploads'))
            )
            ->executeQuery();

        $cacheManager = GeneralUtility::makeInstance(CacheManager::class);

        while ($page = $pagesToBeCleared->fetchAssociative()) {
            $cacheManager->flushCachesInGroupByTag('pages', 'pageId_' . $page['pid']);
        }
    }
}
