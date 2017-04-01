<?php 
require_once('func.php');
/*echo "<pre>";
var_dump($_POST);
*/
$username = $_POST['username'];
$score = 0;
$var = $_POST['test_var'];
$res = $_POST['res'];
$file_data = json_decode (file_get_contents('downloads/'.$var.".json"), true);
if (!empty($_POST['res'])) {if ($res==$file_data['result'])
		{
		echo "Правильно!<br>";
		get_result($username, $score);
		}else {
		echo "Неверно<br>";}
}
if (isset($_POST['back'])) {
var_dump($_POST['back']);
header("location: test.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
<input type="submit" name="back" value="еще">
</form>
</body>
</html>