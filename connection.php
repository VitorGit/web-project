<?php 

//should encript that
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME', 'concessionaria');

$connection = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
	
if(!$connection) 
	die("Mysql server connection failed.".$connection->connect_error)."<br>";

if (!$connection->set_charset("utf8"))
    die( "Error loading character set utf8:".$connection->error."<br>");
?>