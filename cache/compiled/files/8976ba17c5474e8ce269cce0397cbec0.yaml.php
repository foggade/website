<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/admin/admin.yaml',
    'modified' => 1445363532,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'theme' => 'grav',
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'show_beta_msg' => true,
        'google_fonts' => true,
        'enable_auto_updates_check' => true,
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => 30,
                'monthly' => 12,
                'visitors' => 20
            ]
        ]
    ]
];
