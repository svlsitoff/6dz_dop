<?php 
require_once('func.php');
if (!empty($_POST['reg'])) {

		if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name'])){
		$login = $_POST['login'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$file = file_get_contents('users_data.json');
		$users = json_decode($file, true);
		unset($file);
		$users[] = array('login' =>$login ,'password'=>$password,'name'=>$name );
		file_put_contents('users_data.json', json_encode($users, JSON_PRETTY_PRINT));
		unset($users);
		//session_start();

		//$_SESSION['login'] = $login;
        //$_SESSION['password'] = $password;
        
        setcookie('login', $login,time()+300);
        
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>регистрация</title>
	<link rel="stylesheet" href="css/stylereg.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>

<body>

  <div id="login">
  <div class="flip">
    <div class="form-signup">
      <h1>регистрация</h1>
      <fieldset>
        <form action="registration.php" method="post" >
          <input type="text" name="name" placeholder="Имя">
          <input type="text" name="login" placeholder="Логин" required />
          <input type="password" name="password" placeholder="Пароль" required />
          <input type="submit" name="reg" value="зарегистрироваться" />
        </form>
        <a href="test.php">тест</a>
      </fieldset>
    </div>
  </div>
</div>


</body>
</html>

