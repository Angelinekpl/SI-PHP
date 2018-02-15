<?php
error_reporting(E_ALL);
$dsn = 'mysql:host=127.0.0.1;dbname=SIFEV';
$username = 'root';
$password = '';
$options = [];
try {
	$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
	echo $e->getMessage();
}