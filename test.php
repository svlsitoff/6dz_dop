<?php 
require_once('func.php');
session_start();
echo "Привет! ".$_SESSION['login']." введите вариант ?var=1 например<br><br>" ;
$list = getdata();
if(empty($_GET)||$_GET['var']==0) 
	{//echo"введите вариант теста в адресную строку: var=1 например :)";
	header('HTTP/1.0 404 NOT FOUND');
	die();}
if ($_GET['var']>count($list)) {echo "такого варианта нет"; die();}
$var = (int) $_GET['var'];
$test = $list[$var];
$test = json_decode($test, true);
$test = $list[$var];
$test = json_decode($test, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>вариант теста</title>
</head>
<body>
<form action="result.php" method="post" >
<label for="res" ><?=$test['label']?></label>
<input  type="text" name="res"  id = "res" ><br>
<input type="text" name="test_var" value="<?=$var?>" hidden><br>
<label for="username" >Ваше имя</label>
<input type="text" name="username" value="<?= $_SESSION['login'] ?>" id="username"><br><br>
<input type="submit" value="проверить"><br>
</form>
<a href="tabl.php">таблица рекордов</a>
<a href="admin.php">админка</a>
<a href="login.php">авторизация</a>
</body>
</html>