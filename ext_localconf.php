<?php

defined('TYPO3') or die();

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use \W4Services\W4Cacheautoclear\Hooks\Cacheautoclear;
use \W4Services\W4Cacheautoclear\Hooks\Filecacheautoclear;

( function() {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['w4_cacheautoclear_auto_cache_clear'] =
        Cacheautoclear::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_extfilefunc.php']['processData']['w4_cacheautoclear_auto_cache_clear'] =
        Filecacheautoclear::class;

    /* Load setup */
    ExtensionManagementUtility::addTypoScript(
        'w4_cacheautoclear',
        'setup',
        '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:w4_cacheautoclear/Configuration/TypoScript/Setup/" extensions="typoscript">'
    );

})();
