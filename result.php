<?php 
require_once('func.php');
	if ( empty($_POST['username']) || empty($_POST['res']) ) {
		echo "Полученные данные не корректны<br>";
		echo "<a href='test.php'>тест</a>";
		die();
	}else {
		$username =nl2br($_POST['username']);
		$var = (int)$_POST['test_var'];
		$res = (int)$_POST['res'];
		$list = getdata();
		$test = $list[$var];
		$test = json_decode($test, true);
		/////
		$user_names = scandir('records/');
		$match = 0;
		for ($i=0; $i <count($user_names) ; $i++) { 
		 	
		$user_names[$i] = str_replace(".txt", "", $user_names[$i]);
		}
			for ($i=0; $i <count($user_names) ; $i++) { 
				if ($user_names[$i] === $username)
				 	{
				 		$match++;
				 	}
			}

		////
	if($match === 0) {
		file_put_contents("records/$username.txt", 0);
		}

	if ($res===$test['result']) {
		$score = (int)file_get_contents("records/$username.txt");
		$score = $score + 5;
		echo "правильно!<br>";
		echo "Игрок: ".$username." набрал ". $score ." очков";
		file_put_contents("records/$username.txt", $score);
		}

	else{
			echo "НЕверно!";
		}
}

		
		

?>
<form action="test.php" method="get" >
	<input type="submit" name="els" value="ЕЩЕ?"><br><br>
	<input  name="var" value="<?= $var?>" hidden>
</form>
<form>
<a href="tabl.php">таблица рекордов</a><br>
<a href="test.php">тест</a>
<a href="admin.php">админка</a>
</form>