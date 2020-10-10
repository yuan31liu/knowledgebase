<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/config/site.yaml',
    'modified' => 1597033523,
    'data' => [
        'title' => 'Ryan\'s Knowledge Base',
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
            'description' => 'This is Ryan\'s website'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 100,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
