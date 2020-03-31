<?php
$arr = [
    'request' => [
// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => 'alsdaf8*D(as8dasj',
    ],
    'cache' => [
        'class' => 'yii\caching\FileCache',
        'defaultDuration' => 3600,
    ],
    'user' => [
        'identityClass' => 'app\models\mgcms\db\User',
        'enableAutoLogin' => true,
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        // send all mails to a file by default. You have to set
// 'useFileTransport' to false and configure a transport
// for the mailer to send real emails.
        'useFileTransport' => false,
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
    'urlManager' => require __DIR__ . '/router.php',
    'assetManager' => [
        'appendTimestamp' => false,
        'forceCopy' => YII_DEBUG ? true : false,
        'converter' => [
            'commands' => [
                'scss' => ['css', 'sass {from} {to}']
            ],
            'class' => 'nizsheanez\assetConverter\Converter',
            'parsers' => [
                'less' => [// file extension to parse
                    'class' => 'nizsheanez\assetConverter\Less',
                    'output' => 'css', // parsed output file type
                    'options' => [
                        'auto' => true, // optional options
                    ]
                ]
            ]
        ],
        'bundles' => [
            'yii\web\JqueryAsset' => [
                'jsOptions' => ['position' => \yii\web\View::POS_END],
                'js' => ['/js/jquery.min.js']
            ],
            'yii\bootstrap\BootstrapAsset' => [
                'css' => [
                    'bootstrap.css' => null
                ]
            ]
        ],
    ],
    'assetsAutoCompress' =>
    [
        'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
    ],
    'assetsAutoCompress' => require __DIR__ . '/inc/assetsAutoCompress.php',
    'i18n' => [
        'class' => vintage\i18n\components\I18N::className(),
        'languages' => $params['languages'],
        'messageTable' => 'i18n_message',
        'sourceMessageTable' => 'i18n_source_message',
        'translations' => [
            'app' => [
                'class' => yii\i18n\PhpMessageSource::className(),
            ],
        ]
    ],
    'formatter' => [
        'class' => 'app\components\mgcms\MgcmsFormatter',
    ],
    'languageSwitcher' => [
        'class' => 'app\components\mgcms\languageSwitcher',
    ],
    'reCaptcha' => [
        'name' => 'reCaptcha',
        'class' => 'app\components\mgcms\recaptcha\ReCaptcha',
        'siteKey' => '6LcCfnMUAAAAAK49iLvZsS3l8U84d1dgYhzAylqw',
        'secret' => '6LcCfnMUAAAAADjB424a0TuxZKDgobV38I_Q6xHV',
    ],
];

return $arr;
