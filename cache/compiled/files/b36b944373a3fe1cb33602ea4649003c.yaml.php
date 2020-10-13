<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/plugins/mathjax/blueprints/mathjax.yaml',
    'modified' => 1575687929,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'fields' => [
                                'mathjax' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.MATHJAX.MATHJAX',
                                    'underline' => true,
                                    'fields' => [
                                        'header.mathjax.active' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.MATHJAX.ACTIVE',
                                            'toggleable' => true,
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
