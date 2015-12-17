<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/samuelstein/WORK/foggade/website/user/config/system.yaml',
    'modified' => 1450361299,
    'data' => [
        'absolute_urls' => false,
        'default_locale' => 'delete',
        'languages' => [
            'supported' => [
                0 => 'de'
            ]
        ],
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'gga',
            'markdown_extra' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'dateformat' => [
            'default' => NULL,
            'short' => 'jS M Y',
            'long' => 'F jS \\a\\t g:ia'
        ],
        'publish_dates' => true,
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'gzip' => true
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => false,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => false,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
