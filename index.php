<?php 
session_start();
if (empty($_SESSION)) {
	header("location: login.php");
	die;
}
if (!empty($_SESSION['login'])) {
	header("location: test.php");
	die();
}

