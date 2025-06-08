<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'smp',
	'name' => 'SimpleMApp',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        [
			'class' => 'app\components\LanguageSelector',
			'supportedLanguages' => ['uk-UA', 'ru-RU', 'en'], // Список поддерживаемых языков
		]
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'en', // Язык по умолчанию
	'sourceLanguage' => 'en',
	'components' => [
		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@app/messages',
					'sourceLanguage' => 'en', // Язык, на котором написаны исходные сообщения
					'fileMap' => [
						'app' => 'app.php',
						'app/error' => 'error.php',
					],
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'yvA2yyk0FnpzPmSaD2HTQ1lDUEYyk3Qw',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // --- Настройка mailer компонента ---
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class, // Использование Symfony Mailer (рекомендуется для Yii 2.1+)
            'useFileTransport' => false, // Установи в 'false', чтобы письма отправлялись по-настоящему, а не в файлы
            // Настройки SMTP
            'transport' => [
                'scheme' => 'smtps', // Или 'smtp' для незашифрованного соединения
                'host' => 'smtp.gmail.com', // Например, для Gmail
                'username' => 'simplemoba@gmail.com', // Твой адрес Gmail
                'password' => 'vrrabmldyofhhski', // Или пароль от почты, если не используется 2FA
                'port' => 465, // Порт для SMTPS (SSL), для STARTTLS обычно 587
                'options' => [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true,
                    ],
                ],
            ],
            // 'messageConfig' => [ // Опционально: общие настройки для всех писем
            //     'from' => ['no-reply@yourdomain.com' => 'SimpleMapp Support'],
            // ],
        ],
        // --- Конец настройки mailer компонента ---
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
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
