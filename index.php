<?php

if ($_SERVER['SERVER_NAME'] == 'http://www.yonatha.com') {

    $yii = 'framework/yii/yii.php';
    $config = dirname(__FILE__) . '/protected/config/development.php';
} else {
    $yii = 'framework/yii/yii.php';
    $config = dirname(__FILE__) . '/protected/config/development.php';
    
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
Yii::createWebApplication($config)->run();