<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
    	
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'i0R-0AEoX2N2t-WUpWKr99tuOST-V5kh',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
        	'class'=> 'app\components\User',
            'identityClass' => 'app\models\User',
           //'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        		'transport' => [
        				'class' => 'Swift_SmtpTransport',
        				'host' => 'smtp.yandex.ru',
        				'username' => 'bobylevnet@yandex.ru',
        				'password' => 'Entity1q2',
        				'port' => '465',
        				'encryption' => 'ssl',
        		],
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
           // 'useFileTransport' => true,        		
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
        'class'=> 'yii\web\UrlManager',
        		'enablePrettyUrl' => true,
        		'showScriptName' => false,
        		'enableStrictParsing' => false,
            'rules' => [
           		
            ],
        ],
         	
    ],
	
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
    		
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
    		
        'class' => 'yii\gii\Module',
    	'allowedIPs' => ['127.0.0.1', '::1', '192.168.43.*'],
    		];
   
}

return $config;
