<?php 
//session_start();
var_dump($_COOKIE);
if (empty($_COOKIE['login'])) {
	header("location: login.php");
	die;
}
if (!empty($_COOKIE['login'])) {
	header("location: test.php");
	die();
}

