<?php 
$list = scandir('downloads');
foreach ($list as $file) {
	if($file !='.' && $file != '..'){
		$file = str_replace(".json", "", $file);
		echo "$file";
		echo "<br>";
	}
}if (!empty($_POST['del']) && !empty($_POST['del_test'])) {
	$del_user = (int)($_POST['del_test']);
	unlink("downloads/".$del_test.".txt");
	header('location: list.php');}
	

?>
<form method="post">
<label for="del_test">номер теста </label>
<input id="del_test" type="text" name="del_test">
<input type="submit" name="del" value="удалить"><br><br>
</form>
<a href="admin.php">админка</a>