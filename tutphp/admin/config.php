<?php
$currency = 'localhost:8888';
$db_username = 'root';
$db_password = '';
$db_name = 'test2';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
mysqli_query($mysqli,"SET NAMES 'utf8'");
?>
