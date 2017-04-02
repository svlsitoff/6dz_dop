<?php 
$users = scandir('records');
foreach ($users as $file) {
	if($file !='.' && $file != '..'){
		$file = str_replace(".txt", "", $file);
		echo "$file";
		echo "<br>";
	}
}
if (!empty($_POST['del']) && !empty($_POST['del_user'])) {
	$del_user = nl2br($_POST['del_user']);
	unlink("records/".$del_user.".txt");
	header('location: users.php');}
	

?>
<form method="post">
<label for="del_user">кого удалять будем</label>
<input id="del_user" type="text" name="del_user">
<input type="submit" name="del" value="удалить">
</form>
<a href="admin.php">админка</a>