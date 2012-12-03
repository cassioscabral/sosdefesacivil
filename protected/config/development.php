<?php

define('SALT_MD5', 's0mRIdlKvI');
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'SIGEO - Sistema de Gerenciamento de Ocorrência',
    'preload' => array(
        'bootstrap',
    ),
    'sourceLanguage' => 'pt-br',
    'language' => 'pt_br',
    'import' => require(dirname(__FILE__) . '/import.php'),
    'aliases' => array(
        'xupload' => 'ext.xupload'
    ),
    'modules' => require(dirname(__FILE__) . '/modules.php'),
    'components' => array(
        'mail' => array(
            'class' => 'ext.yii-mail.YiiMail',
            'transportType' => 'smtp',
            'transportOptions' => array(
                'host' => 'smtp.gmail.com',
                'username' => 'yonathalmeida',
                'password' => '',
                'port' => '465',
                'encryption' => 'ssl',
            ),
            'viewPath' => 'application.views.mail',
            'logging' => true,
            'dryRun' => false
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
        ),
        'YODebug' => array(
            'class' => 'application.extensions.YODebug',
            'property1' => 'value1',
            'property2' => 'value2',
        ),
        'user' => array(
            'allowAutoLogin' => false,
        ),
        'urlManager' => require(dirname(__FILE__) . '/urlManager.php'),
        'db' => require(dirname(__FILE__) . '/db.php'),
        'authManager' => array(
            'class' => 'modules.srbac.components.SDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'items',
            'assignmentTable' => 'assignments',
            'itemChildTable' => 'itemchildren',
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning, trace',
                ),
                array(// configuration for the toolbar
                    'class' => 'XWebDebugRouter',
                    'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
                    'levels' => 'error, warning, trace, profile, info',
                    'allowedIPs' => array('127.0.0.1', '::1', '192.168.1.54', '192\.168\.1[0-5]\.[0-9]{3}'),
                ),
            ),
        ),
    ),
    'params' => array(
        'debug' => false,
        'smtpSecure' => "ssl",
        'smtpServidor' => "smtp.gmail.com",
        'smtpPorta' => 465,
        'stmpUsuario' => "yonathalmeida@gmail.com",
        'smtpSenha' => "",
    ),
);