<?php
return [

    'language' => 'zh-CN',

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],


        //    Yii::$app->language = 'zh-CN',
        //语言包配置
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'zh-CN',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
//        'i18n' => [
//            'translations' => [
//                '*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//           'basePath' => '/messages',
////          'fileMap' => ['common' => 'common.php'],
//                    'fileMap' => [
//                        //'app' => 'app.php',
////                    'app/error' => 'error.php',
//                        'app' => 'common.php',
//                    ],
//                ],
//
//
//
//            ],
//        ],

    ],




];
