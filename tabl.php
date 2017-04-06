<?php 
//session_start();
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
$max_name = array_keys( @$rec, max(@$rec) );
$succes = "Поздравляем ".$max_name[0]."!\n Вы набрали ". max(@$rec) . " очков";
file_put_contents('serteficate.txt', $succes);
echo "<a href='test.php'>тест</a><br>";
if ($_COOKIE['login']==$max_name[0]){
echo "<a href='serteficate.php'>получить сертефикат</a>";}
else {echo "Серификат выдается самому лучшему игроку!";}
?>



