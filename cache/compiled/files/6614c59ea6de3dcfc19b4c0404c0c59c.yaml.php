<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/plugins/biblatex/blueprints.yaml',
    'modified' => 1597034072,
    'data' => [
        'name' => 'BibLaTeX',
        'version' => '1.0.4',
        'description' => 'Renders a Bibtex-file into HTML and appends it to page content.',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.me',
            'url' => 'http://olevik.me'
        ],
        'homepage' => 'https://github.com/olevik/grav-plugin-biblatex',
        'keywords' => 'responsive, srcset',
        'bugs' => 'https://github.com/olevik/grav-plugin-biblatex/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
