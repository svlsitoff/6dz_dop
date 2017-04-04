<?php 
require_once('func.php');
session_start();
if (!empty($_SESSION['login'])) {
	header('location : test.php');
}
else {
	header('location: login.php');
}
