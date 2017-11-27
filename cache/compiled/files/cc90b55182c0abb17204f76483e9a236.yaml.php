<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/http/grav/user/themes/ef-kropka/blueprints.yaml',
    'modified' => 1511431540,
    'data' => [
        'name' => 'Ef Kropka',
        'version' => '0.1.0',
        'description' => 'theme developed for ef.org.pl',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Joanna Żelek',
            'email' => 'mcstando@gmail.com'
        ],
        'homepage' => 'https://github.com/joanna-elek/grav-theme-ef-kropka',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/joanna-elek/grav-theme-ef-kropka/issues',
        'readme' => 'https://github.com/joanna-elek/grav-theme-ef-kropka/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
