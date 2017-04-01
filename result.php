<?php 
require_once('func.php');
$score = 0;
$username =(!empty($_POST['username'])) ? $_POST['username'] : "данных нет!";
$var = (!empty($_POST['test_var'])) ? $_POST['test_var'] : "данных нет!";
$res = (!empty($_POST['res'])) ? $_POST['res'] : "данных нет!";
$test =  getdata($var);
while (isset($_POST['end']) <= 10) {

}
if ($res==$test['result']) {
echo "правильно -";
$score +=5;
$matches = array('$username' => $score , );
}else{echo "неверно!";}
for ($i=0; $i <10 ; $i++) { 
	echo "привет"; $i++;
}
	

?>
<form method="post" >
	<input type="button" name="else" value="ЕЩЕ?"><br>
	<input type="button" name="end" value="закончить"><br>
</form>
