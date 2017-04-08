<?php 
//session_start();

if (empty($_COOKIE['login'])) {
	header("location: login.php");
	die;
}
if (!empty($_COOKIE['login'])) {
	header("location: test.php");
	die();
}

