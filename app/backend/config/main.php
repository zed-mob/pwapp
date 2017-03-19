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
		'admin' => [
            'mainLayout' => '@backend/themes/000-base/views/layouts/main.php',
	    ],
		'user' => [
            'class' => 'backend\modules\user\Module',
        ],
		'dashboard' => [
            'class' => 'backend\modules\dashboard\Module',
        ],
		'forum' => [
            'class' => 'backend\modules\forum\Module',
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
            'name' => 'pwapp-backend',
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
				'site-posts' => 'post',
				// Dashboard module routes
				'admin-dashboard' => 'dashboard/dashboard',
				// User module routes
				'user-messages'      => 'user/message',
				'course-management'  => 'user/course',
				'user-management'    => 'user/admin',
				'profile-management' => 'user/profile',
				// Forum module routes
				'forum-groups' 		=> 'forum/group',
				'forum-topics' 		=> 'forum/topic',
				'forum-comments' 	=> 'forum/comment',
				'forum-subcomments' => 'forum/subcomment',
				// Admin module routes
				'password-reset' => 'admin/user/request-password-reset',
            ],
        ],
		'view' => [
			'theme' => [
				'basePath' => '@backend/themes/clip-admin',
				'baseUrl' => '@web/themes/clip-admin',
				'pathMap' => [
					'@backend/views' => '@backend/themes/clip-admin',
					'@vendor/mdmsoft/yii2-admin/views' => '@backend/themes/clip-admin/admin',
					'@backend/modules' => '@backend/themes/clip-admin/modules',
				],
			],
		],
    ],
	'as access' => [
		'class' => 'mdm\admin\components\AccessControl',
		'allowActions' => [
			'user/*',
			'dashboard/*',
			'forum/*',
			'post/*',
			'about/*',
			'admission/*',
			'album/*',
			'banner/*',
			'facility/*',
			'faq/*',
			'faq-category/*',
			'image/*',
			'offered-course/*',
			'organization/*',

			// Internal access only
			'admin/*',
			// 'debug/*',
			'gii/*',
		]
	],
    'params' => $params,
];
