<?php
/**
 * lib-locale config file
 * @package lib-locale
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-locale',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-locale',
    '__files' => [
        'modules/lib-locale' => ['install','remove','update'],
        'etc/locale' => ['install', 'remove']
    ],
    '__dependencies' => [],
    '_services' => [
        'locale' => 'LibLocale\\Service\\Locale'
    ],
    '_autoload' => [
        'classes' => [
            'LibLocale\\Service\\Locale' => 'modules/lib-locale/service/Locale.php'
        ],
        'files' => [
            'modules/lib-locale/helper/locale.php'
        ]
    ],

    'libLocale' => [
        'default' => 'en-US'
    ]
];