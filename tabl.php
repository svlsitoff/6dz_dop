<?php 
require_once('func.php');
$user_records =  scandir('records');
for ($i=0; $i <count($user_records) ; $i++) { 
	$user = str_replace(".txt", "", $user_records[$i]);
		if($user !='.' && $user !='..' ){
		$user_score = file_get_contents('records/'.$user_records[$i]);
		echo "$user ----------$user_score <br>";}
	}
	
echo "<pre>";

echo "<a href='test.php'>тест</a>";
?>



