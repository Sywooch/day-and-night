<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        'rbacMenegar' => [
            'class' => 'app\modules\rbacMenegar\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '2U-Y-Ytj-j6yq4_x1DAwd8VSfF8YUejW',
        ],

        'urlManager' => [
//
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
//                '' => 'site/index',
//                '' => 'category/index',
//                'category' => 'category/index',
//                'category/index' => 'category/index',
//                'site' => 'category/index',
//                'site/index' => 'category/index',
                'site/a-instructions/<id:\d+>' => 'site/a-instructions',

                'category/create-element' => 'category/create-element',
                'category/update-element/<id:\d+>' => 'category/update-element',
                'category/delete-element/<id:\d+>' => 'category/delete-element',
                'category/create-element/<id:\d+>' => 'category/create-element',
                'category/get-children-elements/<id:\d+>' => 'category/get-children-elements',

                'category/run-my-modal/<is:\d+>' => 'category/run-my-modal',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],

        'authManager'  => [
            'class' => 'yii\rbac\DbManager',
            'cache' => 'cache',
            'defaultRoles' => ['guest', 'user'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
