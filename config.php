<?php
define("_BASE_URL", $_SERVER['SERVER_NAME']);
require  'Medoo.php';

// Using Medoo namespace
use Medoo\Medoo;

$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'schedulerXp',
	'server' => 'localhost',
	'username' => 'schedulerXp',
	'password' => 'k3y0OZ5b0XcvVPfS',

	// [optional]
	'charset' => 'utf8mb4',
	'port' => 3306,
	// [optional] Table prefix
	// 'prefix' => 'PREFIX_',
	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => true,
	// [optional] MySQL socket (shouldn't be used with server and port)
	// 'socket' => '/tmp/mysql.sock',
	// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
	// [optional] Medoo will execute those commands after connected to the database for initialization
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
]);
