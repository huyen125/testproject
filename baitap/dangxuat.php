<?php
session_start();
if (isset($_SESSION['email'])) {
	session_destroy();
	header('loaction: login.php');
}
else{
	header('loaction: login.php');
}
?>