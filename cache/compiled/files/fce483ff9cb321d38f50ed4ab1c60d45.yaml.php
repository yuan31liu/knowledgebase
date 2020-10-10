<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://mathjax/mathjax.yaml',
    'modified' => 1575687929,
    'data' => [
        'enabled' => true,
        'active' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'weight' => -5,
        'delimiters' => [
            'inline' => [
                '\\(' => '\\)',
                '$' => '$'
            ],
            'block' => [
                '\\[' => '\\]',
                '$$' => '$$'
            ]
        ],
        'CDN' => [
            'enabled' => true,
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML'
        ]
    ]
];
