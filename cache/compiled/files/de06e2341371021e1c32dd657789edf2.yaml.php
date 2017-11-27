<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/http/grav/user/config/site.yaml',
    'modified' => 1511438943,
    'data' => [
        'title' => 'Fundacja eF Kropka',
        'default_lang' => 'pl',
        'author' => [
            'name' => 'Joanna Żelek',
            'email' => 'mcstando@gmail.com'
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
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
