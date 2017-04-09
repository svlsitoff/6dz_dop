<?php 
session_start();
require_once('func.php');

$user_records =  scandir('records');
$rec = [];
for ($i=0; $i <count($user_records) ; $i++) { 
	$user = str_replace(".txt", "", $user_records[$i]);
		if($user !=='.' && $user !=='..' ){
		$user_score = (int)file_get_contents('records/'.$user_records[$i]);
		echo "$user ----------$user_score <br>";
		$rec[$user] = $user_score;
		}
		
	}

if ($_SESSION['login']==='admin') {
	echo "<a href='admin.php'>админка</a><br><br>";
}
echo "<a href='test.php'>тест</a><br><br>";
echo "<a href='login.php'>выход</a><br><br>";

?>



