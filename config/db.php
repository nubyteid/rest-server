<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=lamp-database;dbname=docker',
    'username' => 'docker',
    'password' => 'docker',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
