<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://knowledge-base/knowledge-base.yaml',
    'modified' => 1597032669,
    'data' => [
        'enabled' => true,
        'dropdown' => [
            'enabled' => false
        ],
        'params' => [
            'articles' => [
                'root' => '/home',
                'blacklist' => [
                    0 => 'scratch'
                ],
                'show' => [
                    'date' => true,
                    'authors' => false,
                    'topics' => true,
                    'time' => true
                ]
            ],
            'front' => [
                'maxrows' => 6,
                'maxentries' => 5
            ],
            'sidebar' => [
                'maxentries' => 5,
                'show' => [
                    'categories' => true,
                    'popular' => false,
                    'latest' => true
                ]
            ]
        ]
    ]
];
