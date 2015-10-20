<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/page-inject/blueprints.yaml',
    'modified' => 1445363826,
    'data' => [
        'name' => 'PageInject',
        'version' => '1.1.0',
        'description' => '**PageInject** is a powerful plugin that lets you inject entire pages or page content into other pages using simple markdown syntax',
        'icon' => 'trello',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-page-inject',
        'keywords' => 'inject, embed, markdown',
        'bugs' => 'https://github.com/getgrav/grav-plugin-page-inject/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'processed_content' => [
                    'type' => 'toggle',
                    'label' => 'Processed Content',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'If enabled the page is pre-rendered before being injected, so relative paths work correctly'
                ]
            ]
        ]
    ]
];
