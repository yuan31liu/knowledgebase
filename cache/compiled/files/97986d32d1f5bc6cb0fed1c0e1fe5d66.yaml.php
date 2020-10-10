<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/knowledgebase/user/config/plugins/ganalytics.yaml',
    'modified' => 1578823074,
    'data' => [
        'enabled' => true,
        'trackingId' => 'UA-155983335-1',
        'position' => 'head',
        'objectName' => 'ga',
        'forceSsl' => true,
        'async' => false,
        'anonymizeIp' => true,
        'blockedIpRanges' => [
            0 => 'private',
            1 => 'loopback',
            2 => 'link-local'
        ],
        'blockingCookie' => 'blockGA',
        'cookieConfig' => false,
        'cookieName' => '_ga',
        'cookieExpires' => 63072000,
        'optOutEnabled' => false,
        'debugStatus' => false,
        'debugTrace' => false
    ]
];
