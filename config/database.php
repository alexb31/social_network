<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'reseau');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$db->query('SELECT * FROM users');

?>