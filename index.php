<?php 

if (empty($_COOKIE['login'])) {
	header("location: login.php");
	die;
}
if (!empty($_COOKIE['login'])) {
	session_start();
	$_SESSION['login'] = $_COOKIE['login'];
	header("location: test.php");
	die();
}

