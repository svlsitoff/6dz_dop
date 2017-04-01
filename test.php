
<?php 
if (!empty($_GET['var'])) {
$var = $_GET['var'];}
else{
$var = 1;}
$formdata = json_decode (file_get_contents('downloads/'.$var.".json"), true);

$fdata = $formdata['name'];
$fdata_lab = $formdata['label'];

?>
<!DOCTYPE html>
<html>
<head>
<title>тест</title>
</head>
<body>
введите номер теста в адресную строку браузера на пример ?var=1<br><br><br>
<form action="result.php" method="post" >
<label for="<?= $fdata ?>" ><?=$fdata_lab ?></label><br>
<input name="test_var" value="<?=$var?>" hidden><br>
<input id="<?= $fdata ?>"  type="text" name="res" ><br>
<label for="username" >Имя пользователя</label><br>
<input id="username" type="text" name="username"><br>
<input type="submit" name="go" value="Проверить"><br>
</form>
<a href="list.php">список</a><br>
<a href="admin.php">админка</a><br>
</body>
</html>