<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/samuelstein/WORK/foggade/website/user/plugins/external_links/blueprints.yaml',
    'modified' => 1445363823,
    'data' => [
        'name' => 'External Links',
        'version' => '1.3.1',
        'description' => 'This plugin adds small icons to external and mailto links, informing users the link will take them to a new site or open their email client.',
        'icon' => 'external-link',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-external-links',
        'keywords' => [
            0 => 'external',
            1 => 'links',
            2 => 'filter',
            3 => 'formatter',
            4 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-external-links/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-external-links/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.EXTERNAL_LINKS.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.BUILTIN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'weight' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.WEIGHT',
                            'default' => 0,
                            'validate' => [
                                'type' => 'int',
                                'min' => -100,
                                'max' => 100
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.EXTERNAL_LINKS.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'exclude.classes' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_CLASSES',
                            'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_CLASSES_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'exclude.domains' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_DOMAINS',
                            'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_DOMAINS_HELP',
                            'placeholder' => 'localhost/*, img.domain.com/*',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ]
                    ]
                ],
                'specific' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.EXTERNAL_LINKS.SPECIFIC_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'process' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.PROCESS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'title' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.TITLE',
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'no_follow' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.NO_FOLLOW',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'target' => [
                            'type' => 'select',
                            'size' => 'large',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.TARGET',
                            'default' => '_blank',
                            'placeholder' => '_blank',
                            'selectize' => [
                                'create' => true
                            ],
                            'options' => [
                                '_blank' => 'PLUGINS.EXTERNAL_LINKS.TARGET_BLANK',
                                '_self' => 'PLUGINS.EXTERNAL_LINKS.TARGET_SELF',
                                '_parent' => 'PLUGINS.EXTERNAL_LINKS.TARGET_PARENT',
                                '_top' => 'PLUGINS.EXTERNAL_LINKS.TARGET_TOP'
                            ],
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'mode' => [
                            'type' => 'select',
                            'size' => 'large',
                            'classes' => 'fancy',
                            'label' => 'PLUGINS.EXTERNAL_LINKS.MODE',
                            'help' => 'PLUGINS.EXTERNAL_LINKS.MODE_HELP',
                            'default' => 'active',
                            'options' => [
                                'active' => 'PLUGINS.EXTERNAL_LINKS.MODE_ACTIVE',
                                'passive' => 'PLUGINS.EXTERNAL_LINKS.MODE_PASSIVE'
                            ],
                            'validate' => [
                                'type' => 'string'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
