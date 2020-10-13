<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1602441484,
    'checksum' => '8bddccf3aee057c536a8b0fa291efbaf',
    'files' => [
        'user/config' => [
            'backups' => [
                'file' => 'user/config/backups.yaml',
                'modified' => 1575634629
            ],
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1575634629
            ],
            'plugins/adminstyles' => [
                'file' => 'user/config/plugins/adminstyles.yaml',
                'modified' => 1575857237
            ],
            'plugins/auto-author' => [
                'file' => 'user/config/plugins/auto-author.yaml',
                'modified' => 1575709820
            ],
            'plugins/backtotop' => [
                'file' => 'user/config/plugins/backtotop.yaml',
                'modified' => 1576741045
            ],
            'plugins/darkskyweather' => [
                'file' => 'user/config/plugins/darkskyweather.yaml',
                'modified' => 1576817040
            ],
            'plugins/fullpage' => [
                'file' => 'user/config/plugins/fullpage.yaml',
                'modified' => 1576741268
            ],
            'plugins/ganalytics' => [
                'file' => 'user/config/plugins/ganalytics.yaml',
                'modified' => 1578823074
            ],
            'plugins/highlight' => [
                'file' => 'user/config/plugins/highlight.yaml',
                'modified' => 1580454419
            ],
            'plugins/jscomments' => [
                'file' => 'user/config/plugins/jscomments.yaml',
                'modified' => 1576659764
            ],
            'plugins/page-toc' => [
                'file' => 'user/config/plugins/page-toc.yaml',
                'modified' => 1576135678
            ],
            'plugins/pagination' => [
                'file' => 'user/config/plugins/pagination.yaml',
                'modified' => 1576731852
            ],
            'plugins/readingtime' => [
                'file' => 'user/config/plugins/readingtime.yaml',
                'modified' => 1575709983
            ],
            'plugins/sharer' => [
                'file' => 'user/config/plugins/sharer.yaml',
                'modified' => 1576818007
            ],
            'plugins/toc' => [
                'file' => 'user/config/plugins/toc.yaml',
                'modified' => 1575709207
            ],
            'scheduler' => [
                'file' => 'user/config/scheduler.yaml',
                'modified' => 1575634629
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1575634352
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1602428488
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1575634629
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1602441484
            ]
        ],
        'system/config' => [
            'backups' => [
                'file' => 'system/config/backups.yaml',
                'modified' => 1602357004
            ],
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1602357004
            ],
            'security' => [
                'file' => 'system/config/security.yaml',
                'modified' => 1602357004
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1602357004
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1602357004
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1602357004
            ]
        ],
        'user/plugins' => [
            'plugins/count-views' => [
                'file' => 'user/plugins/count-views/count-views.yaml',
                'modified' => 1596543440
            ],
            'plugins/readingtime' => [
                'file' => 'user/plugins/readingtime/readingtime.yaml',
                'modified' => 1596543458
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1602357269
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1596543477
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1602356988
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1602357312
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1575437682
            ],
            'plugins/mathjax' => [
                'file' => 'user/plugins/mathjax/mathjax.yaml',
                'modified' => 1575687929
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1602357294
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1602357276
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1602357271
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'count-views' => [
                'enabled' => true,
                'datafile' => 'count-views.yaml'
            ],
            'readingtime' => [
                'enabled' => true,
                'words_per_minute' => 200,
                'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
                'round' => 'seconds',
                'include_image_views' => false,
                'seconds_per_image' => '12,11,10,9,8,7,6,5,4,3'
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'version' => '2-checkbox',
                    'theme' => 'light',
                    'site_key' => NULL,
                    'secret_key' => NULL
                ]
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => NULL
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => false,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'searchable_types' => [
                    'title' => true,
                    'content' => true,
                    'taxonomy' => true,
                    'header' => false
                ],
                'header_keys_ignored' => [
                    0 => 'title',
                    1 => 'taxonomy',
                    2 => 'content',
                    3 => 'form',
                    4 => 'forms',
                    5 => 'media_order'
                ]
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'log_viewer_files' => [
                    0 => 'grav',
                    1 => 'email'
                ],
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both',
                    'show_modular' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true,
                    'secure_delete' => false
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
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
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'mathjax' => [
                'enabled' => true,
                'active' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'weight' => -5,
                'delimiters' => [
                    'inline' => [
                        '\\(' => '\\)',
                        '$' => '$'
                    ],
                    'block' => [
                        '\\[' => '\\]',
                        '$$' => '$$'
                    ]
                ],
                'CDN' => [
                    'enabled' => true,
                    'url' => 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML'
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'redirect_to_login' => false,
                'redirect_after_login' => false,
                'redirect_after_logout' => true,
                'session_user_sync' => false,
                'route' => '/login',
                'route_after_login' => '/',
                'route_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'twofa_enabled' => false,
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 2,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 5,
                'max_login_interval' => 10,
                'ipv6_subnet_size' => 64,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level',
                        6 => 'twofa_enabled'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'redirect_after_activation' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'manually_enable' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'queue' => [
                    'enabled' => false,
                    'flush_frequency' => '* * * * *',
                    'flush_msg_limit' => 10,
                    'flush_time_limit' => 100
                ],
                'mailer' => [
                    'engine' => 'sendmail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'adminstyles' => [
                'enabled' => true,
                'preview' => true,
                'styles' => [
                    0 => 'grav_admin',
                    1 => 'metal',
                    2 => 'hoth',
                    3 => 'light',
                    4 => 'stark_contrast',
                    5 => 'dark_ocean',
                    6 => 'wine',
                    7 => 'beach',
                    8 => 'muted_beach',
                    9 => 'sunrise',
                    10 => 'navy_sunrise',
                    11 => 'tan',
                    12 => 'grey',
                    13 => 'gold',
                    14 => 'arctic',
                    15 => 'amber',
                    16 => 'antique'
                ],
                'current' => 'grav_admin',
                'type' => 'radioimage'
            ],
            'auto-author' => [
                'enabled' => true,
                'user' => true
            ],
            'backtotop' => [
                'enabled' => true,
                'fontawesome_icons' => true,
                'fontawesome_css' => true
            ],
            'darkskyweather' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'caption' => 'Weather',
                'refreshtime' => 60,
                'api_key' => 'bdfc8a30834cbaf82e7ae2acdb117559',
                'latitude' => 31.22222,
                'longitude' => 121.45806
            ],
            'fullpage' => [
                'enabled' => true,
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'theme_css' => true,
                'builtin_css' => true,
                'builtin_js' => true,
                'color_function' => '50',
                'header_font' => '\'Helvetica Neue\', Helvetica, Arial, sans-serif',
                'block_font' => 'Palatino, \'Palatino Linotype\', \'Palatino LT STD\', \'Book Antiqua\', Georgia, serif',
                'change_titles' => true,
                'shortcodes' => true,
                'transition' => true,
                'styles' => [
                    0 => [
                        'background' => '#0B110D'
                    ],
                    1 => [
                        'background' => '#2C4D56'
                    ],
                    2 => [
                        'background' => '#C3AA72'
                    ],
                    3 => [
                        'background' => '#DC7612'
                    ],
                    4 => [
                        'background' => '#BD3200'
                    ]
                ],
                'options' => [
                    'navigation' => false,
                    'navigationPosition' => 'right',
                    'showActiveTooltip' => false,
                    'slidesNavigation' => false,
                    'slidesNavPosition' => 'bottom',
                    'css3' => true,
                    'autoScrolling' => true,
                    'fitToSection' => true,
                    'scrollBar' => false,
                    'loopTop' => false,
                    'loopBottom' => false,
                    'loopHorizontal' => true,
                    'touchSensitivity' => 15,
                    'keyboardScrolling' => true,
                    'animateAnchor' => true,
                    'recordHistory' => true,
                    'controlArrows' => true,
                    'verticalCentered' => true,
                    'sectionSelector' => '.section',
                    'slideSelector' => '.slide',
                    'lazyLoading' => true
                ]
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => 'UA-155983335-1',
                'position' => 'head',
                'objectName' => 'ga',
                'forceSsl' => true,
                'async' => false,
                'anonymizeIp' => true,
                'blockedIpRanges' => [
                    0 => 'private',
                    1 => 'loopback',
                    2 => 'link-local'
                ],
                'blockingCookie' => 'blockGA',
                'cookieConfig' => false,
                'cookieName' => '_ga',
                'cookieExpires' => 63072000,
                'optOutEnabled' => false,
                'debugStatus' => false,
                'debugTrace' => false
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'github',
                'lines' => true
            ],
            'jscomments' => [
                'enabled' => true,
                'active' => true,
                'provider' => 'googleplus',
                'providers' => [
                    'disqus' => [
                        'show_count' => false
                    ],
                    'facebook' => [
                        'num_posts' => 5,
                        'colorscheme' => 'light',
                        'order_by' => 'social',
                        'width' => '100%'
                    ],
                    'googleplus' => [
                        'show_count' => false,
                        'width' => '100%'
                    ],
                    'isso' => [
                        'builtin_css' => true,
                        'reply_to_self' => false,
                        'require' => [
                            'author' => true,
                            'email' => true
                        ],
                        'comments' => [
                            'number' => 10,
                            'nested_number' => 5,
                            'reveal' => 5
                        ],
                        'avatar' => [
                            'enabled' => true
                        ],
                        'vote' => [
                            'enabled' => true,
                            'levels' => '-5,5'
                        ]
                    ],
                    'muut' => [
                        'channel' => 'General',
                        'widget' => false,
                        'show_online' => false,
                        'show_title' => false,
                        'upload' => false,
                        'share' => true
                    ],
                    'hypercomments' => [
                        'social' => [
                            0 => 'vk',
                            1 => 'odnoklassniki',
                            2 => 'yandex',
                            3 => 'mailru',
                            4 => 'google',
                            5 => 'livejournal',
                            6 => 'facebook',
                            7 => 'twitter',
                            8 => 'tumblr'
                        ]
                    ]
                ]
            ],
            'page-toc' => [
                'enabled' => true,
                'active' => true,
                'start' => '1',
                'depth' => '6'
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'sharer' => [
                'enabled' => true,
                'built_in_css' => true,
                'fontawesome_icons' => true,
                'fontawesome_v4' => false,
                'fontawesome_css' => true,
                'template' => 'circles',
                'buttons' => [
                    'facebook' => [
                        'enabled' => true,
                        'label' => 'Facebook',
                        'icon' => 'facebook',
                        'priority' => 0
                    ],
                    'twitter' => [
                        'enabled' => true,
                        'label' => 'Twitter',
                        'icon' => 'twitter',
                        'priority' => 1
                    ],
                    'linkedin' => [
                        'enabled' => true,
                        'label' => 'Linkedin',
                        'icon' => 'linkedin',
                        'priority' => 2
                    ],
                    'reddit' => [
                        'enabled' => false,
                        'label' => 'Reddit',
                        'icon' => 'reddit',
                        'priority' => 3
                    ],
                    'pinterest' => [
                        'enabled' => true,
                        'label' => 'Pinterest',
                        'icon' => 'pinterest',
                        'priority' => 4
                    ],
                    'flipboard' => [
                        'enabled' => false,
                        'label' => 'Flipboard',
                        'icon' => 'flipboard',
                        'priority' => 5
                    ],
                    'whatsapp' => [
                        'enabled' => false,
                        'label' => 'WhatsApp',
                        'icon' => 'whatsapp',
                        'priority' => 6
                    ],
                    'telegram' => [
                        'enabled' => true,
                        'label' => 'Telegram',
                        'icon' => 'telegram',
                        'priority' => 7
                    ],
                    'pocket' => [
                        'enabled' => false,
                        'label' => 'Pocket',
                        'icon' => 'get-pocket',
                        'priority' => 8
                    ],
                    'xing' => [
                        'enabled' => false,
                        'label' => 'Xing',
                        'icon' => 'xing',
                        'priority' => 9
                    ],
                    'email' => [
                        'enabled' => false,
                        'label' => 'Email',
                        'icon' => 'envelope',
                        'icon_group' => 'fas',
                        'priority' => 10
                    ],
                    'tumblr' => [
                        'enabled' => false,
                        'label' => 'Tumblr',
                        'icon' => 'tumblr',
                        'priority' => 11
                    ],
                    'line' => [
                        'enabled' => false,
                        'label' => 'Line',
                        'icon' => 'line',
                        'priority' => 12
                    ]
                ]
            ],
            'toc' => [
                'enabled' => false,
                'active' => true,
                'built_in_css' => true,
                'title' => true,
                'anchorlink' => true,
                'permalink' => true,
                'placement' => 'left',
                'visible' => 'hover',
                'icon' => '#',
                'class' => [
                    
                ],
                'baselevel' => 1,
                'headinglevel' => 6,
                'slug' => [
                    'truncate' => true,
                    'granularity' => 'words',
                    'length' => 32,
                    'break' => '-',
                    'pad' => '...'
                ]
            ]
        ],
        'backups' => [
            'purge' => [
                'trigger' => 'space',
                'max_backups_count' => 25,
                'max_backups_space' => 5,
                'max_backups_time' => 365
            ],
            'profiles' => [
                0 => [
                    'name' => 'Default Site Backup',
                    'root' => '/',
                    'schedule' => false,
                    'schedule_at' => '0 3 * * *',
                    'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                    'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules'
                ]
            ]
        ],
        'media' => [
            'types' => [
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
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
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
                    'thumb' => 'media/thumb-svg.png',
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
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
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
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
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
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
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
        ],
        'security' => [
            'xss_whitelist' => [
                0 => 'admin.super'
            ],
            'xss_enabled' => [
                'on_events' => true,
                'invalid_protocols' => true,
                'moz_binding' => true,
                'html_inline_styles' => true,
                'dangerous_tags' => true
            ],
            'xss_invalid_protocols' => [
                0 => 'javascript',
                1 => 'livescript',
                2 => 'vbscript',
                3 => 'mocha',
                4 => 'feed',
                5 => 'data'
            ],
            'xss_dangerous_tags' => [
                0 => 'applet',
                1 => 'meta',
                2 => 'xml',
                3 => 'blink',
                4 => 'link',
                5 => 'style',
                6 => 'script',
                7 => 'embed',
                8 => 'object',
                9 => 'iframe',
                10 => 'frame',
                11 => 'frameset',
                12 => 'ilayer',
                13 => 'layer',
                14 => 'bgsound',
                15 => 'title',
                16 => 'base'
            ],
            'uploads_dangerous_extensions' => [
                0 => 'php',
                1 => 'html',
                2 => 'htm',
                3 => 'js',
                4 => 'exe'
            ],
            'salt' => 'ifsYlwj4xh6c7p'
        ],
        'site' => [
            'title' => 'Yuan\'s Knowledge Base',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Ryan Liu',
                'email' => 'ryan__liu@outlook.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'author'
            ],
            'metadata' => [
                'description' => 'This is my knowledge base.'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 100,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'Stream',
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
        'system' => [
            'absolute_urls' => false,
            'timezone' => NULL,
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => NULL,
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'http_x_forwarded' => [
                'protocol' => true,
                'host' => false,
                'port' => true,
                'ip' => true
            ],
            'languages' => [
                'supported' => [
                    0 => 'en',
                    1 => 'fr',
                    2 => 'de'
                ],
                'default_lang' => NULL,
                'include_default_lang' => false,
                'pages_fallback_only' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => true
            ],
            'pages' => [
                'theme' => 'knowledge-base',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
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
                    'twig' => true
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
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
                    ],
                    'valid_link_attributes' => [
                        0 => 'rel',
                        1 => 'target',
                        2 => 'id',
                        3 => 'class',
                        4 => 'classes'
                    ]
                ],
                'types' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'xml',
                    3 => 'txt',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => NULL,
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'hide_empty_folders' => false,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'purge_at' => '0 4 * * *',
                'clear_at' => '0 3 * * *',
                'clear_job_type' => 'standard',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => NULL,
                    'server' => NULL,
                    'port' => NULL,
                    'password' => NULL
                ],
                'memcache' => [
                    'server' => NULL,
                    'port' => NULL
                ],
                'memcached' => [
                    'server' => NULL,
                    'port' => NULL
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 1,
                'log' => true
            ],
            'log' => [
                'handler' => 'file',
                'syslog' => [
                    'facility' => 'local6'
                ]
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
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false,
                'seofriendly' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => NULL,
                'allowed_fallback_types' => NULL,
                'auto_metadata_exif' => false,
                'upload_limit' => 8388608
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'uniqueness' => 'path',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ],
            'accounts' => [
                'type' => 'data',
                'storage' => 'file'
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true
            ]
        ],
        'scheduler' => [
            
        ]
    ]
];
