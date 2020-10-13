<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/config/site.yaml',
    'modified' => 1602428488,
    'data' => [
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
    ]
];
