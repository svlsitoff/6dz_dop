<?php 
session_start();
require_once('func.php');
if(empty($_SESSION['login']) && empty($_COOKIE['login'])){
	header("location: login.php");
}
/*if (!empty($_SESSION['login']&&$_SESSION['login']==='admin')) {
	header("location: admin.php");*/

if(!empty($_SESSION['login'] )){
	echo $_SESSION['login']." выберите вариант теста<br><br>";
	$varcount = scandir('downloads');
	foreach ($varcount as $file) {
		if($file !='.' && $file != '..'){
			$file = str_replace(".json", "", $file);
			echo "<h4><a href='test.php"."?var=$file'>$file</a></h4>";
			echo "<br>";

		}
	}
	$list = getdata();
	if(empty($_GET)||$_GET['var']==0) 
		{//echo"введите вариант теста в адресную строку: var=1 например :)";
		//header('HTTP/1.0 404 NOT FOUND');
		die();}
	if ($_GET['var']>count($list)) {echo "такого варианта нет"; die();}
	$var = (int) $_GET['var'];
	$test = $list[$var];
	$test = json_decode($test, true);
	$test = $list[$var];
	$test = json_decode($test, true);
}
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
<input type="text" name="username" value="<?= $_SESSION['login'] ?>" id="username" hidden><br><br>
<input type="submit" value="проверить"><br>
</form>
<?php if ($_SESSION['login']==='admin') : ?>
<a href="admin.php">админка</a><br>
<?php endif; ?>
<a href="tabl.php">таблица рекордов</a><br>
<a href="login.php">выход</a>
</body>
</html>