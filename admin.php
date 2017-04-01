<?php require_once('function.php'); 
if (isset($_POST['go'])) {
 header("location: list.php");
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
<input type="file" name="file"><br>
<input type="submit" name="go" value="Отправить"><br>
</form>
<a href="test.php">тест</a>
<a href="list.php">список</a>
</body>
</html>
