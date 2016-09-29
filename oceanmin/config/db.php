<?php

return [
    'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=127.0.0.1;dbname=shelf',
	'username' => 'root',
	'password' => 'bike.com',
	'charset' => 'utf8',
	'tablePrefix' => 'ocean_',
	'enableSchemaCache' => true,
    // Duration of schema cache.
    'schemaCacheDuration' => 3600,
    // Name of the cache component used to store schema information
    'schemaCache' => 'cache',
	];
