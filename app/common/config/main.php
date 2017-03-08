<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules' => [
		'gridview' => [
			'class' => '\kartik\grid\Module',
		],
		'admin' => [
	        'class' => 'mdm\admin\Module',
	    ],
	],
	'aliases' => [
		'@mdm/admin' => '@app/vendor/mdmsoft/yii2-admin',
	],
    'components' => [
		'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => getenv('DB_DSN'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => getenv('DB_CHARSET'),
        ],
		'authManager' => [
	        'class' => 'yii\rbac\DbManager',
	    ],
		'user' => [
			//'class' => 'mdm\admin\models\User',
	        'identityClass' => 'mdm\admin\models\User',
	        'loginUrl' => ['user/login'],
	    ],
		'urlManager' => [
            'enablePrettyUrl'	  => true,
            'showScriptName'	  => false,
            'enableStrictParsing' => false,
            'rules' => [
				// Remove 'site' parameter from URL
				'<alias:\w+>' => 'site/<alias>',

				// Account login & logout routes
				'user/login' => 'admin/user/login',
				'user/logout' => 'admin/user/logout',

		        // Default routes
		        '<controller:\w+>/<id:\d+>'				 => '<controller>/view',
		        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
		        '<controller:\w+>/<action:\w+>'			 => '<controller>/<action>',
            ],
        ],
    ],
	'as access' => [
		'class' => 'mdm\admin\components\AccessControl',
		'allowActions' => [
			'site/*',

			// Modules
			'dashboard/*',
		]
	],
];
