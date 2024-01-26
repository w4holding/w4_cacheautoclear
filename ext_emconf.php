<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'W4 Cache Autoclear',
    'description' => 'W4 clear related pages cache after saving records.',
    'version' => '1.0.3',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.0.99'
        ],
    ],
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'W4 Services GmbH',
    'author_email' => 'info@w-4.ch',
    'author_company' => 'W4 Services GmbH',
    'autoload' => [
        'psr-4' => [
            'W4Services\\W4Cacheautoclear\\' => 'Classes'
        ],
    ],
];
