<?php 
require_once('func.php');
if (!empty($_GET)) {
$var = (int) $_GET['var'];
$test =  getdata($var);
}
else{echo "введите вариант теста";}

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
<input type="text" name="username" id="username"><br>
<input type="submit" value="проверить"><br>
</form>
</body>
</html>