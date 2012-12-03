<?php

return array(
    'YODebug' => array(
        'class' => 'application.extensions.YODebug',
        'property1' => 'value1',
        'property2' => 'value2',
    ),
    'bootstrap' => array(
        'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
    ),
    'user' => array(
// enable cookie-based authentication
        'allowAutoLogin' => false,
    ),
    'urlManager' => require(dirname(__FILE__) . '/router.php'),
    'db' => require(dirname(__FILE__) . '/db.php'),
    'authManager' => array(
        'class' => 'modules.srbac.components.SDbAuthManager',
        // The database component used
        'connectionID' => 'db',
        // The itemTable name (default:authitem)
        'itemTable' => 'items',
        // The assignmentTable name (default:authassignment)
        'assignmentTable' => 'assignments',
        // The itemChildTable name (default:authitemchild)
        'itemChildTable' => 'itemchildren',
    ),
    'errorHandler' => array(
// use 'site/error' action to display errors
        'errorAction' => 'site/error',
    ),
    'log' => array(
        'class' => 'CLogRouter',
        'routes' => array(
            array(
                'class' => 'CWebLogRoute',
            ),
        ),
    ),
);
?>