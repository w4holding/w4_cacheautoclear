<?php

defined('TYPO3') or die();

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

( function( $_EXTKEY) {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY . '_auto_cache_clear'] =
        \W4Services\W4Cacheautoclear\Hooks\Cacheautoclear::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_extfilefunc.php']['processData'][$_EXTKEY . '_auto_cache_clear'] =
        \W4Services\W4Cacheautoclear\Hooks\Filecacheautoclear::class;

    /* Load setup */
    ExtensionManagementUtility::addTypoScript(
        $_EXTKEY,
        'setup',
        '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Setup/" extensions="typoscript">'
    );

})( 'w4_cacheautoclear');
