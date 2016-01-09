<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/samuelstein/WORK/foggade/website/user/plugins/piwik/blueprints.yaml',
    'modified' => 1450361556,
    'data' => [
        'name' => 'piwik',
        'version' => '1.0.0',
        'description' => 'piwik plugin Grav website.',
        'icon' => 'location-arrow',
        'author' => [
            'name' => 'Michele Palmieri',
            'email' => 'michele@michelepalmieri.it',
            'url' => 'http://michelepalmieri.it'
        ],
        'homepage' => 'https://github.com/MichelePalmieri/grav-piwik',
        'keywords' => 'piwik, plugin, tracking, analytics',
        'bugs' => 'https://github.com/MichelePalmieri/grav-piwik/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'siteId' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'site ID',
                    'placeholder' => 0,
                    'help' => 'piwik tracking ID. In format integer.'
                ],
                'sitePiWikURL' => [
                    'type' => 'text',
                    'label' => 'url piwik',
                    'size' => 'medium',
                    'placeholder' => 'http://example.com/privacy-url',
                    'help' => 'Add url piwik'
                ]
            ]
        ]
    ]
];
