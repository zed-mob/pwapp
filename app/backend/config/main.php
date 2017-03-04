<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'user' => [
            'class' => 'backend\modules\user\Module',
        ],
	],
    'components' => [
		'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
			'identityClass' => 'mdm\admin\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'yfp-6-backend',
        ],
        'log' => [
            'traceLevel' => getenv('YII_DEBUG') ? 3 : 0,
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
            'showScriptName'  => false,
            'rules' => [
				// Dashboard module routes
				'dashboard' => 'dashboard/default/index',

				// Admin module routes
				'password-reset' => 'admin/user/request-password-reset',
            ],
        ],
		'view' => [
			'theme' => [
				'basePath' => '@backend/themes/000-base',
				'baseUrl' => '@web/assets',
				'pathMap' => [
					'@backend/views' => '@backend/themes/000-base/views',
					'@vendor/mdmsoft/yii2-admin/views' => '@backend/themes/000-base/views',
				],
			],
		],
    ],
	'as access' => [
		'class' => 'mdm\admin\components\AccessControl',
		'allowActions' => [
			// Internal access only
			'admin/*',
			'debug/*',
			'gii/*'
		]
	],
    'params' => $params,
];
