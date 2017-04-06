<?php 
session_start();
if($_SESSION['login'] !== "admin"){ header('location: login.php'); die();}
require_once('func.php');


if(!empty($_FILES)){
	move_uploaded_file($_FILES['file']['tmp_name'], 'downloads/'.$_FILES['file']['name']);
}
if(!empty($_POST['go'])){
$tests = scandir('downloads');
foreach ($tests as  $test) {
	if ($test!=='.' && $test !=='..') {
	$listing = file_get_contents('downloads/'.$test);
	$listing = file_put_contents('listing.txt', $listing."***", FILE_APPEND);
		}
	}
}
if (!empty($_POST['list'])) {
	header('location: list.php');
}if (!empty($_POST['users'])) {
	header('location: users.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>генератор тестов</title>
	<meta charset="utf-8">
</head>
<body>
<form action="admin.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" name="go" value="Отправить"><br><br>
<input type="submit" name="list" value="К списку файлов"><br><br>
<input type="submit" name="users" value="рекорды пользователей">
</form>
<a href="test.php">тест</a>
<a href="login.php">авторизация</a>
</body>
</html>