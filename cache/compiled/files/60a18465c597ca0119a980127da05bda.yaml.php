<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1602356988,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'display_button' => false,
        'min_query_length' => 3,
        'route' => '/search',
        'search_content' => 'rendered',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => NULL
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => false,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'searchable_types' => [
            'title' => true,
            'content' => true,
            'taxonomy' => true,
            'header' => false
        ],
        'header_keys_ignored' => [
            0 => 'title',
            1 => 'taxonomy',
            2 => 'content',
            3 => 'form',
            4 => 'forms',
            5 => 'media_order'
        ]
    ]
];
