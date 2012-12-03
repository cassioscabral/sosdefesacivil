<?php

return array(
    'usuario',
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'password' => 'string',
        'generatorPaths' => array(
            //'ext.gtc', // a path alias
            'bootstrap.gii',
        ),
        // If removed, Gii defaults to localhost only. Edit carefully to taste.
        'ipFilters' => array('127.0.0.1', '::1', '192.168.0.115'),
    ),
);
?>