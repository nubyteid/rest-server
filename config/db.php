<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=docker-lemp-app_db_1;dbname=appdb',
    'username' => 'root',
    'password' => 'p@assw0rd!',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
