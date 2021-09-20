<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3eOu6O84mLETE5nY4W9R',
            'csrfParam' => '_frontendCSRF',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_frontendUser'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'PHPFRONTSESSID',
            'savePath' => sys_get_temp_dir(),],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'home/index',
                'index2' => 'home/index2',
                'about' => 'about/about',
                'resume' => 'resume/resume',
                'contact' => 'contact/contact',
                'login' => 'log/login',
                'logout' => 'log/logout',
                '<controller>/<action>/<id:\d+>' => '<controller>/<action>'
            ],
        ],

    ],
    'params' => $params,
];