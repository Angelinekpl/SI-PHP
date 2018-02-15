<?php
error_reporting(E_ALL);

$dsn = 'mysql:host=127.0.0.1;dbname=SIFEV';
$username = 'root';
$password = '';
$options = [];
try {
	// create connection
	$connection = new PDO($dsn, $username, $password, $options);
	// set the PDO error mode to exception
} catch(PDOException $e) {
	echo $e->getMessage();
}
