<?php 
if(!empty($_FILES)){
	move_uploaded_file($_FILES['file']['tmp_name'], 'downloads/'.$_FILES['file']['name']);
}
$tests = scandir('downloads');
foreach ($tests as  $test) {
	if ($test!=='.' && $test !=='..') {
		
	$listing = file_get_contents('downloads/'.$test);
	$listing = file_put_contents('listing.txt', $listing."***", FILE_APPEND);
	}
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