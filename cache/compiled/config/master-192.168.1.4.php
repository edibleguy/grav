<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1482775213,
    'checksum' => 'f8ec6cf4e7c91e54a2eaff9472c5a8b8',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1482593372
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1482564417
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1482694657
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1482593372
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1482775162
            ],
            'themes/bones' => [
                'file' => 'user/config/themes/bones.yaml',
                'modified' => 1482726852
            ],
            'themes/bones-vanilla' => [
                'file' => 'user/config/themes/bones-vanilla.yaml',
                'modified' => 1482726955
            ],
            'themes/purity' => [
                'file' => 'user/config/themes/purity.yaml',
                'modified' => 1482726157
            ],
            'themes/striped' => [
                'file' => 'user/config/themes/striped.yaml',
                'modified' => 1482725300
            ],
            'themes/woo' => [
                'file' => 'user/config/themes/woo.yaml',
                'modified' => 1482725359
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1482773221
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1482773221
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1482773221
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1482773221
            ]
        ],
        'user/plugins' => [
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1482719730
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1482432294
            ],
            'plugins/markdown-fontawesome' => [
                'file' => 'user/plugins/markdown-fontawesome/markdown-fontawesome.yaml',
                'modified' => 1482727099
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1482719732
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1482592681
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1482719731
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1482432294
            ],
            'plugins/featherlight' => [
                'file' => 'user/plugins/featherlight/featherlight.yaml',
                'modified' => 1482727098
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/page-inject.yaml',
                'modified' => 1482727100
            ],
            'plugins/git-sync' => [
                'file' => 'user/plugins/git-sync/git-sync.yaml',
                'modified' => 1482775212
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1482681572
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1482592683
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1482432295
            ],
            'plugins/materializer' => [
                'file' => 'user/plugins/materializer/materializer.yaml',
                'modified' => 1482723631
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1482719727
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/external_links.yaml',
                'modified' => 1482727096
            ],
            'plugins/gantry5' => [
                'file' => 'user/plugins/gantry5/gantry5.yaml',
                'modified' => 1482713206
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1482592684
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1482719726
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/youtube.yaml',
                'modified' => 1482727101
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1482592688
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1482719729
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'markdown-fontawesome' => [
                'enabled' => true
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'featherlight' => [
                'enabled' => true,
                'active' => true,
                'gallery' => false,
                'requirejs' => false,
                'openSpeed' => 250,
                'closeSpeed' => 250,
                'closeOnClick' => 'background',
                'closeOnEsc' => true,
                'root' => 'body',
                'initTemplate' => 'plugin://featherlight/js/featherlight.init.js'
            ],
            'page-inject' => [
                'enabled' => true,
                'active' => true,
                'processed_content' => true
            ],
            'git-sync' => [
                'enabled' => true,
                'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)'
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => NULL,
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
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
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'materializer' => [
                'enabled' => true,
                'always_load' => false,
                'load_css' => true,
                'load_js' => true
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
                'links' => [
                    'www' => false,
                    'schemes' => [
                        0 => 'http',
                        1 => 'https',
                        2 => 'ftp',
                        3 => 'irc',
                        4 => 'mailto',
                        5 => 'news',
                        6 => 'nntp',
                        7 => 'rtsp',
                        8 => 'sftp',
                        9 => 'ssh',
                        10 => 'tel',
                        11 => 'telnet',
                        12 => 'webcal'
                    ]
                ],
                'process' => true,
                'title' => false,
                'no_follow' => true,
                'target' => '_blank',
                'mode' => 'active'
            ],
            'gantry5' => [
                'enabled' => true,
                'production' => true,
                'use_media_folder' => false,
                'offline' => false,
                'offline_message' => NULL,
                'asset_timestamps' => true,
                'asset_timestamps_period' => 7,
                'debug' => false,
                'compile_yaml' => true,
                'compile_twig' => true
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect_after_login' => NULL,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'youtube' => [
                'enabled' => true,
                'built_in_css' => true,
                'add_editor_button' => true,
                'player_parameters' => [
                    'autoplay' => 0,
                    'cc_load_policy' => 0,
                    'color' => 'red',
                    'controls' => 1,
                    'disablekb' => 0,
                    'enablejsapi' => 0,
                    'fs' => 1,
                    'hl' => '',
                    'iv_load_policy' => 1,
                    'loop' => 0,
                    'modestbranding' => 0,
                    'origin' => '',
                    'playsinline' => 0,
                    'rel' => 1,
                    'showinfo' => 1,
                    'vq' => 'default'
                ],
                'privacy_enhanced_mode' => false
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
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
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
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
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
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
                    'thumb' => 'media/thumb.png',
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
                    'thumb' => 'media/thumb.png',
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
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
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
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
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
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
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
        'site' => [
            'title' => 'My Edible Landscape',
            'author' => [
                'name' => 'Mark Lee',
                'email' => 'mark.lee.phd@gmail.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
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
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'g5_helium',
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
                'twig_first' => false,
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
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
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
                'lifetime' => 604800,
                'gzip' => false,
                'redis' => [
                    'socket' => false
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
                'display' => true,
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
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'testing',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'iteTBdzWHvpCsX'
        ],
        'themes' => [
            'bones' => [
                'enabled' => true,
                'site_title' => [
                    'enabled' => true
                ],
                'google_fonts_logo' => [
                    'enabled' => true
                ],
                'fontawesome' => [
                    'enabled' => true
                ],
                'google_prettify' => [
                    'enabled' => true
                ],
                'dropdown' => [
                    'enabled' => true
                ],
                'mobilemenu_breakpoint' => 'all',
                'mobilemenu_position' => 'right',
                'foundation_offcanvas_js' => [
                    'enabled' => false
                ],
                'foundation_util_mediaQuery_js' => [
                    'enabled' => true
                ],
                'foundation_util_motion_js' => [
                    'enabled' => true
                ],
                'foundation_util_touch_js' => [
                    'enabled' => true
                ],
                'foundation_util_triggers_js' => [
                    'enabled' => true
                ],
                'css_bones' => [
                    'enabled' => true
                ],
                'css_global_styles' => [
                    'enabled' => true
                ],
                'css_grid' => [
                    'enabled' => true
                ],
                'css_flex_grid' => [
                    'enabled' => false
                ],
                'css_typography' => [
                    'enabled' => true
                ],
                'css_button' => [
                    'enabled' => true
                ],
                'css_forms' => [
                    'enabled' => true
                ],
                'css_visibility_classes' => [
                    'enabled' => true
                ],
                'css_float_classes' => [
                    'enabled' => true
                ],
                'css_menu' => [
                    'enabled' => true
                ],
                'css_off_canvas' => [
                    'enabled' => true
                ],
                'css_pagination' => [
                    'enabled' => true
                ],
                'css_sticky' => [
                    'enabled' => true
                ],
                'css_table' => [
                    'enabled' => true
                ],
                'animate_css' => [
                    'enabled' => true
                ],
                'wow_js' => [
                    'enabled' => true
                ],
                'foundation_abide_js' => [
                    'enabled' => false
                ],
                'foundation_accordion_js' => [
                    'enabled' => false
                ],
                'foundation_accordionMenu_js' => [
                    'enabled' => false
                ],
                'foundation_drilldown_js' => [
                    'enabled' => false
                ],
                'foundation_dropdown_js' => [
                    'enabled' => false
                ],
                'foundation_dropdownMenu_js' => [
                    'enabled' => false
                ],
                'foundation_equalizer_js' => [
                    'enabled' => false
                ],
                'foundation_interchange_js' => [
                    'enabled' => false
                ],
                'foundation_magellan_js' => [
                    'enabled' => false
                ],
                'foundation_orbit_js' => [
                    'enabled' => false
                ],
                'foundation_responsiveMenu_js' => [
                    'enabled' => true
                ],
                'foundation_responsiveToggle_js' => [
                    'enabled' => true
                ],
                'foundation_reveal_js' => [
                    'enabled' => false
                ],
                'foundation_slider_js' => [
                    'enabled' => true
                ],
                'foundation_sticky_js' => [
                    'enabled' => false
                ],
                'foundation_tabs_js' => [
                    'enabled' => true
                ],
                'foundation_toggler_js' => [
                    'enabled' => false
                ],
                'foundation_tooltip_js' => [
                    'enabled' => false
                ],
                'foundation_util_box_js' => [
                    'enabled' => false
                ],
                'foundation_util_keyboard_js' => [
                    'enabled' => false
                ],
                'foundation_util_nest_js' => [
                    'enabled' => false
                ],
                'foundation_util_timerAndImageLoader_js' => [
                    'enabled' => false
                ],
                'css_custom' => [
                    'enabled' => false
                ],
                'css_accordion' => [
                    'enabled' => false
                ],
                'css_accordion_menu' => [
                    'enabled' => false
                ],
                'css_badge' => [
                    'enabled' => false
                ],
                'css_breadcrumbs' => [
                    'enabled' => false
                ],
                'css_button_group' => [
                    'enabled' => false
                ],
                'css_callout' => [
                    'enabled' => true
                ],
                'css_close_button' => [
                    'enabled' => false
                ],
                'css_drilldown_menu' => [
                    'enabled' => false
                ],
                'css_dropdown' => [
                    'enabled' => false
                ],
                'css_dropdown_menu' => [
                    'enabled' => false
                ],
                'css_flex_video' => [
                    'enabled' => false
                ],
                'css_label' => [
                    'enabled' => false
                ],
                'css_media_object' => [
                    'enabled' => false
                ],
                'css_orbit' => [
                    'enabled' => false
                ],
                'css_progress_bar' => [
                    'enabled' => false
                ],
                'css_slider' => [
                    'enabled' => false
                ],
                'css_reveal' => [
                    'enabled' => false
                ],
                'css_switch' => [
                    'enabled' => false
                ],
                'css_tabs' => [
                    'enabled' => false
                ],
                'css_thumbnail' => [
                    'enabled' => false
                ],
                'css_title_bar' => [
                    'enabled' => false
                ],
                'css_tooltip' => [
                    'enabled' => false
                ],
                'css_top_bar' => [
                    'enabled' => false
                ],
                'css_ui_transitions' => [
                    'enabled' => false
                ],
                'css_ui_animations' => [
                    'enabled' => false
                ]
            ],
            'bones-vanilla' => [
                'enabled' => true,
                'site_title' => [
                    'enabled' => true
                ],
                'google_fonts_logo' => [
                    'enabled' => true
                ],
                'fontawesome' => [
                    'enabled' => true
                ],
                'google_prettify' => [
                    'enabled' => true
                ],
                'dropdown' => [
                    'enabled' => true
                ],
                'mobilemenu_breakpoint' => 'large',
                'mobilemenu_position' => 'left',
                'animate_css' => [
                    'enabled' => true
                ],
                'wow_js' => [
                    'enabled' => true
                ],
                'css_custom' => [
                    'enabled' => false
                ]
            ],
            'purity' => [
                'enabled' => true,
                'tagline' => 'stuff',
                'footer' => true,
                'layout' => true,
                'style' => false,
                'menu' => 0
            ],
            'striped' => [
                'enabled' => true,
                'color' => 'blue',
                'dropdown' => [
                    'enabled' => true
                ]
            ],
            'woo' => [
                'enabled' => true,
                'color' => 'blue',
                'dropdown' => [
                    'enabled' => true
                ]
            ]
        ]
    ]
];
