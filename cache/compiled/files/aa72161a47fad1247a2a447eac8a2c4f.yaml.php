<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/striped/blueprints.yaml',
    'modified' => 1482802104,
    'data' => [
        'name' => 'Striped',
        'version' => '2.2.0',
        'description' => 'Striped by HTML5 UP, features a clean, minimalistic design, styling for all basic page elements, a repositionable sidebar (left or right), and HTML5/CSS3 code designed for quick and easy customization.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-striped',
        'demo' => 'http://demo.getgrav.org/striped-skeleton',
        'keywords' => 'striped, theme, modern, fast, responsive, html5, css3, blog',
        'bugs' => 'https://github.com/getgrav/grav-theme-striped/issues',
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
