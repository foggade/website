<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1445363953,
    'checksum' => '6883c93048f8da96a260feb23f9e9671',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'languages' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://languages',
                            1 => 'system/languages'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'backup' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'backup'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'lightslider' => [
                'enabled' => true,
                'built_in_css' => true,
                'slider_type' => 'text',
                'type_text_height' => 'auto',
                'type_text_vertical_padding' => '80px',
                'type_text_horizontal_padding' => '50px',
                'type_text_brightness' => 0,
                'item' => 1,
                'slideMove' => 1,
                'slideMargin' => 0,
                'loop' => 'false',
                'mode' => 'fade',
                'controls' => 'true',
                'keyPress' => 'true',
                'auto' => 'false',
                'pause' => 2000,
                'speed' => 1000,
                'pager' => 'true',
                'gallery' => 'false',
                'gallery_thumb_width' => 100,
                'gallery_thumb_height' => 100,
                'gallery_margin' => 15,
                'gallery_thumb_margin' => 5,
                'enableTouch' => 'true',
                'enableDrag' => 'true'
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'external_links' => [
                'enabled' => true,
                'built_in_css' => true,
                'weight' => 0,
                'exclude' => [
                    'classes' => [
                        0 => 'exclude'
                    ],
                    'domains' => NULL
                ],
                'process' => true,
                'title' => true,
                'no_follow' => true,
                'target' => '_blank',
                'mode' => 'active'
            ],
            'page-inject' => [
                'enabled' => true,
                'processed_content' => true
            ],
            'admin' => [
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
            ],
            'simplecontact' => [
                'enabled' => true,
                'subject' => 'New contact from Grav site!',
                'recipient' => 'hello@example.com',
                'fields' => [
                    'name' => [
                        'label' => 'Name',
                        'placeholder' => 'Add your name'
                    ],
                    'email' => [
                        'label' => 'Email',
                        'placeholder' => 'Add your email'
                    ],
                    'message' => [
                        'label' => 'Message',
                        'placeholder' => 'Add your message'
                    ],
                    'antispam' => [
                        'label' => 'Antispam',
                        'placeholder' => 'Please leave this field empty for Antispam'
                    ],
                    'submit' => [
                        'label' => 'Submit'
                    ]
                ],
                'messages' => [
                    'success' => 'Thank You! Your message has been sent.',
                    'error' => 'Oops! There was a problem with your submission. Please complete the form and try again.',
                    'fail' => 'Oops! Something went wrong and we couldn\'t send your message.'
                ]
            ],
            'form' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false
            ],
            'email' => [
                'enabled' => true,
                'from' => '',
                'to' => '',
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ]
            ]
        ],
        'site' => [
            'title' => 'Freunde von Gods Golden Acre Deutschland e. V.',
            'author' => [
                'name' => 'Samuel Stein',
                'email' => 'mail@samuelstein.de'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Der Verein verfolgt die Zwecke jungen Menschen in Not, insbesondere in Entwicklungsländern wie Südafrika, die Chance auf Bildung zu geben, der Bevölkerung in Deutschland die Auswirkungen von Armut auf Bildung bekannt zu machen und vornehmlich junge Menschen in Deutschland für die gesellschaftliche Mitverantwortung und Hilfsbereitschaft gegenüber Menschen in den Entwicklungsländern zu sensibilisieren.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/redirect-test' => '/',
                '/old/(.*)' => '/new/$1'
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/new/(.*)' => '/blog/$1'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'displayTitle' => 'Freunde von Gods Golden Acre',
            'keywords' => 'GGA, FOGGADE, Verein, gemeinnützig'
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'languages' => [
                'supported' => [
                    
                ],
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'home_redirect' => [
                    'include_lang' => true,
                    'include_route' => false
                ],
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'antimatter',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'json',
                    4 => 'rss',
                    5 => 'atom'
                ],
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'markdown_extra' => true
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => true
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.4.min.js'
                ]
            ],
            'errors' => [
                'display' => false,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site'
            ],
            'security' => [
                'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ]
    ]
];
