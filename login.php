<?php 
require_once('func.php');
if (isset($_POST['inter'])) {
        if (isset($_POST['login']) && isset($_POST['password'])) {
        $user = getUser($_POST['login']);
        if (!$user || $user['password'] != $_POST['password']) {
                $errors[] = "неверный логин или пароль";
            }
        if (empty($errors)){
            session_start();
            $_SESSION['login'] = $_POST['login'];
            header('location: test.php');
            }
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>авторизация</title>
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>
   
   
    <div class="clr"></div>
    </div>


    <div id="login">
        <form action="login.php" method="post">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" name="login" placeholder="login" onFocus="if(this.value == 'Логин') this.value = ''" required></p> 
                <p><span class="fontawesome-lock"></span><input type="password"  name="password" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" placeholder="пароль" required></p> 
                <p><input type="submit" name="inter" value="ВОЙТИ"></p>
            </fieldset>
        </form>
        <p>Нет аккаунта? &nbsp;&nbsp;<a href="registration.php">Регистрация</a><span class="fontawesome-arrow-right"></span></p>
        <?php if(!empty($errors)) :?>
        <ul>

           <?php foreach ($errors as $key => $error):?>
           <li>
               <?= $error ?>
           </li> 
           <?php endforeach; ?>
           </ul>
        <?php endif; ?>
    </div>
</body>
</html>