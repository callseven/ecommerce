<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => '123456',
		'database' => 'cake',
	);
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => '123456',
		'database' => 'cake',
	);
	public $Database = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => '127.0.0.1',
		'port' => 3306,
		'login' => 'root',
		'password' => '123456',
		'database' => 'cake',
	);
}
