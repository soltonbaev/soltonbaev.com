<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/soltonba/public_html/user/config/site.yaml',
    'modified' => 1656937668,
    'size' => 396,
    'data' => [
        'title' => 'soltonbaev.com - Ibraim Soltonbaev\'s personal web-site',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Ibraim Soltonbaev',
            'email' => 'contact@soltonbaev.com'
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
    ]
];
