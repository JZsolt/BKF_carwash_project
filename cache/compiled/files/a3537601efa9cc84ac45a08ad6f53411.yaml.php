<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/AMPPS/www/grav/user/plugins/email/email.yaml',
    'modified' => 1545737373,
    'data' => [
        'enabled' => true,
        'from' => 'office@bkf-carwash.ro',
        'from_name' => 'Office BKF Car-wash',
        'to' => 'office@bkf-carwash.ro',
        'to_name' => 'Office BKF Car-wash',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'bkf-carwash.ro',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'office@bkf-carwash.ro',
                'password' => 'urs0h5aun9fn'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
