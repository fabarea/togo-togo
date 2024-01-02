<?php

/**
 * Extension Manager/Repository config file for ext "site_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fab\\SitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Fabien',
    'author_email' => 'fabien@udriot.net',
    'author_company' => 'Fab',
    'version' => '1.0.0',
];
