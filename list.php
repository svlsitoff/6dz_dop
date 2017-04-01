<?php 
$list = scandir('downloads');
foreach ($list as  $value) {
	if ($value!=='.' && $value !=='..') {
		
	echo "$value";
	echo "<br>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>список загруженных тестов</title>
</head>
<body>
<a href="admin.php">админка</a><br>
<a href="test.php">тест</a><br>
</body>
</html>