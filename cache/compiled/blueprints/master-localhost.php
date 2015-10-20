<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'a359b3c778287d271e77c4eb8a28b457:e1a822b16ea898b1d0562ce3b2edeffc',
    'files' => [
        'user/plugins' => [
            'plugins/lightslider' => [
                'file' => 'user/plugins/lightslider/blueprints.yaml',
                'modified' => 1445363824
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1445363821
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1445363827
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/blueprints.yaml',
                'modified' => 1445363823
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/blueprints.yaml',
                'modified' => 1445363826
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1445363532
            ],
            'plugins/simplecontact' => [
                'file' => 'user/plugins/simplecontact/blueprints.yaml',
                'modified' => 1445361784
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1445363524
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1445363527
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1445363526
            ]
        ],
        'system/blueprints/config' => [
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1445363943
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1445363943
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1445363943
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1445363943
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins'
            ],
            'plugins.lightslider' => [
                'type' => '_parent',
                'name' => 'plugins.lightslider'
            ],
            'plugins.lightslider.enabled' => [
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
                ],
                'name' => 'plugins.lightslider.enabled'
            ],
            'plugins.lightslider.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.lightslider.built_in_css'
            ],
            'plugins.lightslider.slider_type' => [
                'type' => 'toggle',
                'label' => 'Slider Type',
                'highlight' => 1,
                'default' => 'text',
                'options' => [
                    'text' => 'Text',
                    'image' => 'Image'
                ],
                'name' => 'plugins.lightslider.slider_type'
            ],
            'plugins.lightslider.type_text_height' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Type Text Height',
                'default' => 'auto',
                'help' => 'CSS attribute for height. Defaults to `auto` but could be `300px`',
                'name' => 'plugins.lightslider.type_text_height'
            ],
            'plugins.lightslider.type_text_vertical_padding' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Type Text Vertical Padding',
                'default' => '80px',
                'help' => 'CSS attribute for vertical padding. Defaults to `80px`',
                'name' => 'plugins.lightslider.type_text_vertical_padding'
            ],
            'plugins.lightslider.type_text_horizontal_padding' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Type Text Horizontal Padding',
                'default' => '50px',
                'help' => 'CSS attribute for horizontal padding. Defaults to `50px`',
                'name' => 'plugins.lightslider.type_text_horizontal_padding'
            ],
            'plugins.lightslider.type_text_brightness' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Type Text Brightness',
                'default' => 0,
                'help' => 'Optional brightness value ranging from daker `-255` to  lighter `255` where `0` is no change',
                'name' => 'plugins.lightslider.type_text_brightness'
            ],
            'plugins.lightslider.item' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Item',
                'default' => 1,
                'help' => 'The number of slides to show at a time',
                'name' => 'plugins.lightslider.item'
            ],
            'plugins.lightslider.slideMove' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Slide Move',
                'default' => 1,
                'help' => 'This option sets the number of slides moved at a time. The default setting is `1`',
                'name' => 'plugins.lightslider.slideMove'
            ],
            'plugins.lightslider.slideMargin' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Slide Margin',
                'default' => 0,
                'help' => 'This option sets the spacing between each slide.',
                'name' => 'plugins.lightslider.slideMargin'
            ],
            'plugins.lightslider.loop' => [
                'type' => 'toggle',
                'label' => 'Loop',
                'highlight' => true,
                'default' => 'false',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Sets whether or not to loop the slides or stop at the last slide',
                'name' => 'plugins.lightslider.loop'
            ],
            'plugins.lightslider.mode' => [
                'type' => 'toggle',
                'label' => 'Loop',
                'highlight' => 'fade',
                'default' => 'fade',
                'options' => [
                    'fade' => 'Fade',
                    'slide' => 'Slide'
                ],
                'help' => 'Sets the transition mode',
                'name' => 'plugins.lightslider.mode'
            ],
            'plugins.lightslider.controls' => [
                'type' => 'toggle',
                'label' => 'Controls',
                'highlight' => true,
                'default' => 'true',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Enables the front-end controls, giving visitors the ability to switch between slides',
                'name' => 'plugins.lightslider.controls'
            ],
            'plugins.lightslider.keyPress' => [
                'type' => 'toggle',
                'label' => 'Key Press',
                'highlight' => true,
                'default' => 'true',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Enables keyboard navigation between slides',
                'name' => 'plugins.lightslider.keyPress'
            ],
            'plugins.lightslider.auto' => [
                'type' => 'toggle',
                'label' => 'Auto',
                'highlight' => true,
                'default' => 'false',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Sets whether or not automatic transitions is enabled',
                'name' => 'plugins.lightslider.auto'
            ],
            'plugins.lightslider.pause' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Pause',
                'default' => 2000,
                'help' => 'Sets the time (in milliseconds) between automatic transitions',
                'name' => 'plugins.lightslider.pause'
            ],
            'plugins.lightslider.speed' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Speed',
                'default' => 1000,
                'help' => 'Sets the time (in milliseconds) of the transition between slides',
                'name' => 'plugins.lightslider.speed'
            ],
            'plugins.lightslider.pager' => [
                'type' => 'toggle',
                'label' => 'Pager',
                'highlight' => true,
                'default' => 'true',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Toggles the pagination that appears along with the lightSlider',
                'name' => 'plugins.lightslider.pager'
            ],
            'plugins.lightslider.gallery' => [
                'type' => 'toggle',
                'label' => 'Gallery',
                'highlight' => true,
                'default' => 'false',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Enables gallery style thumbnail pager (will disable standard pager)',
                'name' => 'plugins.lightslider.gallery'
            ],
            'plugins.lightslider.gallery_thumb_width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Gallery Thumb Width',
                'default' => 100,
                'help' => 'Sets the gallery thumb image width',
                'name' => 'plugins.lightslider.gallery_thumb_width'
            ],
            'plugins.lightslider.gallery_thumb_height' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Gallery Thumb Height',
                'default' => 100,
                'help' => 'Sets the gallery thumb image height',
                'name' => 'plugins.lightslider.gallery_thumb_height'
            ],
            'plugins.lightslider.gallery_margin' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Gallery Margin',
                'default' => 15,
                'help' => 'Vertical space between the bottom of the slider and the gallery',
                'name' => 'plugins.lightslider.gallery_margin'
            ],
            'plugins.lightslider.gallery_thumb_margin' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Gallery Thumb Margin',
                'default' => 5,
                'help' => 'Horizontal space between the gallery thumbnails',
                'name' => 'plugins.lightslider.gallery_thumb_margin'
            ],
            'plugins.lightslider.enableTouch' => [
                'type' => 'toggle',
                'label' => 'Enable Touch',
                'highlight' => true,
                'default' => 'true',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Enables touch support for touch-enabled devices',
                'name' => 'plugins.lightslider.enableTouch'
            ],
            'plugins.lightslider.enableDrag' => [
                'type' => 'toggle',
                'label' => 'Enable Drag',
                'highlight' => true,
                'default' => 'true',
                'options' => [
                    'true' => 'Enabled',
                    'false' => 'Disabled'
                ],
                'help' => 'Enables desktop mouse drag support',
                'name' => 'plugins.lightslider.enableDrag'
            ],
            'plugins.error' => [
                'type' => '_parent',
                'name' => 'plugins.error'
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes'
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404'
            ],
            'plugins.problems' => [
                'type' => '_parent',
                'name' => 'plugins.problems'
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css'
            ],
            'plugins.external_links' => [
                'type' => '_parent',
                'name' => 'plugins.external_links'
            ],
            'plugins.external_links.enabled' => [
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
                ],
                'name' => 'plugins.external_links.enabled'
            ],
            'plugins.external_links.built_in_css' => [
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
                ],
                'name' => 'plugins.external_links.built_in_css'
            ],
            'plugins.external_links.weight' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGINS.EXTERNAL_LINKS.WEIGHT',
                'default' => 0,
                'validate' => [
                    'type' => 'int',
                    'min' => -100,
                    'max' => 100
                ],
                'name' => 'plugins.external_links.weight'
            ],
            'plugins.external_links.exclude' => [
                'type' => '_parent',
                'name' => 'plugins.external_links.exclude'
            ],
            'plugins.external_links.exclude.classes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_CLASSES',
                'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_CLASSES_HELP',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.classes'
            ],
            'plugins.external_links.exclude.domains' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_DOMAINS',
                'help' => 'PLUGINS.EXTERNAL_LINKS.EXCLUDE_DOMAINS_HELP',
                'placeholder' => 'localhost/*, img.domain.com/*',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.domains'
            ],
            'plugins.external_links.process' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.PROCESS',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.process'
            ],
            'plugins.external_links.title' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.TITLE',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.title'
            ],
            'plugins.external_links.no_follow' => [
                'type' => 'toggle',
                'label' => 'PLUGINS.EXTERNAL_LINKS.NO_FOLLOW',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.no_follow'
            ],
            'plugins.external_links.target' => [
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
                ],
                'name' => 'plugins.external_links.target'
            ],
            'plugins.external_links.mode' => [
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
                ],
                'name' => 'plugins.external_links.mode'
            ],
            'plugins.page-inject' => [
                'type' => '_parent',
                'name' => 'plugins.page-inject'
            ],
            'plugins.page-inject.enabled' => [
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
                ],
                'name' => 'plugins.page-inject.enabled'
            ],
            'plugins.page-inject.processed_content' => [
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
                'help' => 'If enabled the page is pre-rendered before being injected, so relative paths work correctly',
                'name' => 'plugins.page-inject.processed_content'
            ],
            'plugins.admin' => [
                'type' => '_parent',
                'name' => 'plugins.admin'
            ],
            'plugins.admin.Basics' => [
                'type' => 'section',
                'title' => 'Basics',
                'underline' => false,
                'name' => 'plugins.admin.Basics'
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'Administrator path',
                'size' => 'medium',
                'placeholder' => 'Default route for administrator (relative to base)',
                'help' => 'If you want to change the URL for the administrator, you can provide a path here',
                'name' => 'plugins.admin.route'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'Theme',
                'default' => 'grav',
                'name' => 'plugins.admin.theme'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'Edit mode',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'Normal',
                    'expert' => 'Expert'
                ],
                'help' => 'Auto will use blueprint if available, if none found, it will use "Expert" mode.',
                'name' => 'plugins.admin.edit_mode'
            ],
            'plugins.admin.google_fonts' => [
                'type' => 'toggle',
                'label' => 'Use Google Fonts',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Use Google custom fonts.  Disable this to use Helvetica. Useful when using Cyrillic and other languages with unsupported characters.',
                'name' => 'plugins.admin.google_fonts'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'toggle',
                'label' => 'Show Beta Message',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Show the beta warning message on the dashboard',
                'name' => 'plugins.admin.show_beta_msg'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'Automatically check for updates',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Shows an informative message, in the admin panel, when an update is available.',
                'name' => 'plugins.admin.enable_auto_updates_check'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session'
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Session Timeout',
                'help' => 'Sets the session timeout in seconds',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout'
            ],
            'plugins.admin.warnings' => [
                'type' => '_parent',
                'name' => 'plugins.admin.warnings'
            ],
            'plugins.admin.warnings.delete_page' => [
                'type' => 'toggle',
                'label' => 'Warn on page delete',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Ask the user confirmation when deleting a page',
                'name' => 'plugins.admin.warnings.delete_page'
            ],
            'plugins.admin.Popularity' => [
                'type' => 'section',
                'title' => 'Popularity',
                'underline' => true,
                'name' => 'plugins.admin.Popularity'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity'
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'Visitor tracking',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Enable the visitors stats collecting feature',
                'name' => 'plugins.admin.popularity.enabled'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard'
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'Days of stats',
                'size' => 'x-small',
                'default' => 7,
                'help' => 'Keep stats for the specified number of days, then drop them',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'Ignore',
                'size' => 'large',
                'help' => 'URLs to ignore',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'placeholder_value' => '/ignore-this-route',
                'name' => 'plugins.admin.popularity.ignore'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history'
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'Daily history',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'Monthly history',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'Visitors history',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors'
            ],
            'plugins.form' => [
                'type' => '_parent',
                'name' => 'plugins.form'
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled'
            ],
            'plugins.login' => [
                'type' => '_parent',
                'name' => 'plugins.login'
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'help' => 'Include the CSS provided by the admin plugin',
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'label' => 'Login path',
                'help' => 'Custom route to a custom login page that your theme provides',
                'placeholder' => '/my-custom-login',
                'name' => 'plugins.login.route'
            ],
            'plugins.email' => [
                'type' => '_parent',
                'name' => 'plugins.email'
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer'
            ],
            'plugins.email.mailer.engine' => [
                'label' => 'Mail Engine',
                'type' => 'hidden',
                'name' => 'plugins.email.mailer.engine'
            ],
            'plugins.email.mailer.default' => [
                'type' => 'select',
                'label' => 'Mailer',
                'size' => 'medium',
                'options' => [
                    'none' => 'Disabled',
                    'smtp' => 'SMTP',
                    'sendmail' => 'Sendmail',
                    'mail' => 'PHP Mail'
                ],
                'name' => 'plugins.email.mailer.default'
            ],
            'plugins.email.from' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email from',
                'placeholder' => 'Default email from address',
                'name' => 'plugins.email.from'
            ],
            'plugins.email.to' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Email to',
                'placeholder' => 'Default email to address (can also be comma separated list)',
                'name' => 'plugins.email.to'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp'
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP server',
                'placeholder' => 'e.g. smtp.google.com',
                'name' => 'plugins.email.mailer.smtp.server'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'SMTP port',
                'placeholder' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'SMTP encryption',
                'options' => [
                    'none' => 'None',
                    'ssl' => 'SSL',
                    'ttl' => 'TTL'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP login name',
                'name' => 'plugins.email.mailer.smtp.user'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'SMTP password',
                'name' => 'plugins.email.mailer.smtp.password'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail'
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Path to sendmail',
                'placeholder' => '/usr/sbin/sendmail',
                'name' => 'plugins.email.mailer.sendmail.bin'
            ],
            'streams' => [
                'type' => '_parent',
                'name' => 'streams'
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'site' => [
                'type' => '_parent',
                'name' => 'site'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'placeholder' => 'PLUGIN_ADMIN.SITE_TITLE_PLACEHOLDER',
                'help' => 'PLUGIN_ADMIN.SITE_TITLE_HELP',
                'name' => 'site.title'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'help' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR_HELP',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TAXONOMY_TYPES_HELP',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'help' => 'PLUGIN_ADMIN.SUMMARY_SIZE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.FORMAT_HELP',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'help' => 'PLUGIN_ADMIN.DELIMITER_HELP',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'help' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_VALUE',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'help' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_VALUE',
                'name' => 'site.routes'
            ],
            'system' => [
                'type' => '_parent',
                'name' => 'system'
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP',
                'name' => 'system.home.alias'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Santa_Isabel' => '(UTC-07:00) America/Santa_Isabel',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Chihuahua' => '(UTC-06:00) America/Chihuahua',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Mazatlan' => '(UTC-06:00) America/Mazatlan',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/Merida' => '(UTC-05:00) America/Merida',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/Monterrey' => '(UTC-05:00) America/Monterrey',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Mexico_City' => '(UTC-05:00) America/Mexico_City',
                    'America/Bahia_Banderas' => '(UTC-05:00) America/Bahia_Banderas',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'Pacific/Easter' => '(UTC-05:00) Pacific/Easter',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/Montevideo' => '(UTC-03:00) America/Montevideo',
                    'Antarctica/Palmer' => '(UTC-03:00) Antarctica/Palmer',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Santiago' => '(UTC-03:00) America/Santiago',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Campo_Grande' => '(UTC-03:00) America/Campo_Grande',
                    'America/Cuiaba' => '(UTC-03:00) America/Cuiaba',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/Asuncion' => '(UTC-03:00) America/Asuncion',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'America/Godthab' => '(UTC-02:00) America/Godthab',
                    'America/Sao_Paulo' => '(UTC-02:00) America/Sao_Paulo',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Atlantic/Azores' => '(UTC+00:00) Atlantic/Azores',
                    'America/Scoresbysund' => '(UTC+00:00) America/Scoresbysund',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Isle_of_Man' => '(UTC+01:00) Europe/Isle_of_Man',
                    'Africa/Casablanca' => '(UTC+01:00) Africa/Casablanca',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Europe/Lisbon' => '(UTC+01:00) Europe/Lisbon',
                    'Atlantic/Madeira' => '(UTC+01:00) Atlantic/Madeira',
                    'Atlantic/Faroe' => '(UTC+01:00) Atlantic/Faroe',
                    'Atlantic/Canary' => '(UTC+01:00) Atlantic/Canary',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Guernsey' => '(UTC+01:00) Europe/Guernsey',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Europe/London' => '(UTC+01:00) Europe/London',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Europe/Jersey' => '(UTC+01:00) Europe/Jersey',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Europe/Dublin' => '(UTC+01:00) Europe/Dublin',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Africa/El_Aaiun' => '(UTC+01:00) Africa/El_Aaiun',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Europe/Budapest' => '(UTC+02:00) Europe/Budapest',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Europe/Zurich' => '(UTC+02:00) Europe/Zurich',
                    'Europe/Zagreb' => '(UTC+02:00) Europe/Zagreb',
                    'Europe/Monaco' => '(UTC+02:00) Europe/Monaco',
                    'Africa/Windhoek' => '(UTC+02:00) Africa/Windhoek',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Cairo' => '(UTC+02:00) Africa/Cairo',
                    'Europe/Malta' => '(UTC+02:00) Europe/Malta',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Europe/Warsaw' => '(UTC+02:00) Europe/Warsaw',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Europe/Paris' => '(UTC+02:00) Europe/Paris',
                    'Europe/San_Marino' => '(UTC+02:00) Europe/San_Marino',
                    'Europe/Tirane' => '(UTC+02:00) Europe/Tirane',
                    'Europe/Stockholm' => '(UTC+02:00) Europe/Stockholm',
                    'Europe/Sarajevo' => '(UTC+02:00) Europe/Sarajevo',
                    'Europe/Skopje' => '(UTC+02:00) Europe/Skopje',
                    'Europe/Rome' => '(UTC+02:00) Europe/Rome',
                    'Europe/Vaduz' => '(UTC+02:00) Europe/Vaduz',
                    'Europe/Vienna' => '(UTC+02:00) Europe/Vienna',
                    'Europe/Madrid' => '(UTC+02:00) Europe/Madrid',
                    'Europe/Podgorica' => '(UTC+02:00) Europe/Podgorica',
                    'Europe/Prague' => '(UTC+02:00) Europe/Prague',
                    'Europe/Vatican' => '(UTC+02:00) Europe/Vatican',
                    'Europe/Oslo' => '(UTC+02:00) Europe/Oslo',
                    'Europe/Gibraltar' => '(UTC+02:00) Europe/Gibraltar',
                    'Europe/Andorra' => '(UTC+02:00) Europe/Andorra',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Europe/Amsterdam' => '(UTC+02:00) Europe/Amsterdam',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Europe/Luxembourg' => '(UTC+02:00) Europe/Luxembourg',
                    'Europe/Belgrade' => '(UTC+02:00) Europe/Belgrade',
                    'Europe/Brussels' => '(UTC+02:00) Europe/Brussels',
                    'Europe/Bratislava' => '(UTC+02:00) Europe/Bratislava',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Antarctica/Troll' => '(UTC+02:00) Antarctica/Troll',
                    'Arctic/Longyearbyen' => '(UTC+02:00) Arctic/Longyearbyen',
                    'Europe/Berlin' => '(UTC+02:00) Europe/Berlin',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Ceuta' => '(UTC+02:00) Africa/Ceuta',
                    'Europe/Ljubljana' => '(UTC+02:00) Europe/Ljubljana',
                    'Europe/Copenhagen' => '(UTC+02:00) Europe/Copenhagen',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Busingen' => '(UTC+02:00) Europe/Busingen',
                    'Europe/Istanbul' => '(UTC+03:00) Europe/Istanbul',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Europe/Mariehamn' => '(UTC+03:00) Europe/Mariehamn',
                    'Europe/Bucharest' => '(UTC+03:00) Europe/Bucharest',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Europe/Riga' => '(UTC+03:00) Europe/Riga',
                    'Europe/Chisinau' => '(UTC+03:00) Europe/Chisinau',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Europe/Athens' => '(UTC+03:00) Europe/Athens',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Europe/Kiev' => '(UTC+03:00) Europe/Kiev',
                    'Europe/Helsinki' => '(UTC+03:00) Europe/Helsinki',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Asia/Beirut' => '(UTC+03:00) Asia/Beirut',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Asia/Hebron' => '(UTC+03:00) Asia/Hebron',
                    'Europe/Sofia' => '(UTC+03:00) Europe/Sofia',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Asia/Jerusalem' => '(UTC+03:00) Asia/Jerusalem',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Asia/Gaza' => '(UTC+03:00) Asia/Gaza',
                    'Europe/Zaporozhye' => '(UTC+03:00) Europe/Zaporozhye',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Europe/Uzhgorod' => '(UTC+03:00) Europe/Uzhgorod',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Europe/Tallinn' => '(UTC+03:00) Europe/Tallinn',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Europe/Vilnius' => '(UTC+03:00) Europe/Vilnius',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Asia/Nicosia' => '(UTC+03:00) Asia/Nicosia',
                    'Asia/Tehran' => '(UTC+03:30) Asia/Tehran',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Baku' => '(UTC+05:00) Asia/Baku',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Pyongyang' => '(UTC+08:30) Asia/Pyongyang',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Broken_Hill' => '(UTC+10:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+10:30) Australia/Adelaide',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Australia/Hobart' => '(UTC+11:00) Australia/Hobart',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Australia/Currie' => '(UTC+11:00) Australia/Currie',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Australia/Melbourne' => '(UTC+11:00) Australia/Melbourne',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Australia/Lord_Howe' => '(UTC+11:00) Australia/Lord_Howe',
                    'Australia/Sydney' => '(UTC+11:00) Australia/Sydney',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Auckland' => '(UTC+13:00) Pacific/Auckland',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Antarctica/McMurdo' => '(UTC+13:00) Antarctica/McMurdo',
                    'Pacific/Chatham' => '(UTC+13:45) Pacific/Chatham',
                    'Pacific/Apia' => '(UTC+14:00) Pacific/Apia',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat'
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                '@data-options' => '\\Grav\\Common\\Utils::dateFormats',
                'options' => [
                    '' => 'Auto Guess or Enter Custom',
                    'd-m-Y H:i' => 'd-m-Y H:i (e.g. 20-10-2015 17:59)',
                    'Y-m-d H:i' => 'Y-m-d H:i (e.g. 2015-10-20 17:59)',
                    'm/d/Y h:i a' => 'm/d/Y h:i (e.g. 10/20/2015 05:59 pm)',
                    'H:i d-m-Y' => 'H:i d-m-Y (e.g. 17:59 20-10-2015)',
                    'h:i a m/d/Y' => 'h:i a m/d/Y (e.g. 05:59 pm 10/20/2015)'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.home_redirect' => [
                'type' => '_parent',
                'name' => 'system.languages.home_redirect'
            ],
            'system.languages.home_redirect.include_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_LANGUAGE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_lang'
            ],
            'system.languages.home_redirect.include_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_ROUTE',
                'help' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_route'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                'help' => 'PLUGIN_ADMIN.UPLOAD_LIMIT_HELP',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session'
            ],
            'system.session.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP',
                'name' => 'system.session.name'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'lightslider' => [
                    'enabled' => 'plugins.lightslider.enabled',
                    'built_in_css' => 'plugins.lightslider.built_in_css',
                    'slider_type' => 'plugins.lightslider.slider_type',
                    'type_text_height' => 'plugins.lightslider.type_text_height',
                    'type_text_vertical_padding' => 'plugins.lightslider.type_text_vertical_padding',
                    'type_text_horizontal_padding' => 'plugins.lightslider.type_text_horizontal_padding',
                    'type_text_brightness' => 'plugins.lightslider.type_text_brightness',
                    'item' => 'plugins.lightslider.item',
                    'slideMove' => 'plugins.lightslider.slideMove',
                    'slideMargin' => 'plugins.lightslider.slideMargin',
                    'loop' => 'plugins.lightslider.loop',
                    'mode' => 'plugins.lightslider.mode',
                    'controls' => 'plugins.lightslider.controls',
                    'keyPress' => 'plugins.lightslider.keyPress',
                    'auto' => 'plugins.lightslider.auto',
                    'pause' => 'plugins.lightslider.pause',
                    'speed' => 'plugins.lightslider.speed',
                    'pager' => 'plugins.lightslider.pager',
                    'gallery' => 'plugins.lightslider.gallery',
                    'gallery_thumb_width' => 'plugins.lightslider.gallery_thumb_width',
                    'gallery_thumb_height' => 'plugins.lightslider.gallery_thumb_height',
                    'gallery_margin' => 'plugins.lightslider.gallery_margin',
                    'gallery_thumb_margin' => 'plugins.lightslider.gallery_thumb_margin',
                    'enableTouch' => 'plugins.lightslider.enableTouch',
                    'enableDrag' => 'plugins.lightslider.enableDrag'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'external_links' => [
                    'enabled' => 'plugins.external_links.enabled',
                    'built_in_css' => 'plugins.external_links.built_in_css',
                    'weight' => 'plugins.external_links.weight',
                    'exclude' => [
                        'classes' => 'plugins.external_links.exclude.classes',
                        'domains' => 'plugins.external_links.exclude.domains'
                    ],
                    'process' => 'plugins.external_links.process',
                    'title' => 'plugins.external_links.title',
                    'no_follow' => 'plugins.external_links.no_follow',
                    'target' => 'plugins.external_links.target',
                    'mode' => 'plugins.external_links.mode'
                ],
                'page-inject' => [
                    'enabled' => 'plugins.page-inject.enabled',
                    'processed_content' => 'plugins.page-inject.processed_content'
                ],
                'admin' => [
                    'Basics' => 'plugins.admin.Basics',
                    'enabled' => 'plugins.admin.enabled',
                    'route' => 'plugins.admin.route',
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'google_fonts' => 'plugins.admin.google_fonts',
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout'
                    ],
                    'warnings' => [
                        'delete_page' => 'plugins.admin.warnings.delete_page'
                    ],
                    'Popularity' => 'plugins.admin.Popularity',
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ]
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled'
                ],
                'login' => [
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'route' => 'plugins.login.route'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'default' => 'plugins.email.mailer.default',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'from' => 'plugins.email.from',
                    'to' => 'plugins.email.to'
                ]
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'home_redirect' => [
                        'include_lang' => 'system.languages.home_redirect.include_lang',
                        'include_route' => 'system.languages.home_redirect.include_route'
                    ],
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'debug' => 'system.images.debug'
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name'
                ],
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
