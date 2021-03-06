<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/woo/blueprints.yaml',
    'modified' => 1482802104,
    'data' => [
        'name' => 'Woo',
        'version' => '1.2.0',
        'description' => 'Woo is a clean, modern, landing page site template by Styleshout. It has a fully responsive design and was tested on all major browser and mobile devices.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-woo',
        'demo' => 'http://demo.getgrav.org/woo-skeleton',
        'keywords' => 'woo, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-woo/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
