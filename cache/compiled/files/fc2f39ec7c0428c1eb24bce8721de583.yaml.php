<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home3/bkfcarbc/test.bkf-carwash.ro/user/config/system.yaml',
    'modified' => 1543782990,
    'data' => [
        'absolute_urls' => true,
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'bkf',
            'markdown' => [
                'extra' => false
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ]
    ]
];
