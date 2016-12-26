<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/gantry5/engines/nucleus/particles/search.yaml',
    'modified' => 1482713206,
    'data' => [
        'name' => 'Search',
        'description' => 'Search Particle',
        'type' => 'particle',
        'icon' => 'fa-search',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable search particles.',
                    'default' => true
                ]
            ]
        ]
    ]
];
