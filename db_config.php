<?php
require 'libs/notorm/NotORM.php';

// database config
// server database
$server = 'localhost';
// database name
$db_name = 'music-app-api';
// database user
$db_user = 'root';
// database password
$db_pass = '';

$pdo = new PDO("mysql:host=$server;dbname=$db_name", $db_user, $db_pass);
$db = new NotORM($pdo);

?>
