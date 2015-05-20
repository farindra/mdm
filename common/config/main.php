<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',

        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',//'yii\rbac\PhpManager', // or use
            //'class' => 'yii\rbac\PhpManager',
        ],
    ],
];
