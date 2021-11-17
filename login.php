<?php
	$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
	if(isset($_POST["login"])){
	$user_name=($_POST['user_name']);
	$password=($_POST['password']);
	$dolgonst=($_POST['dolgnost']);
	if(!empty($_POST['user_name']) && !empty($_POST['password']) && !empty($_POST['dolgnost'])) {
	$query ='SELECT * FROM sudi WHERE user_name="'.$user_name.'" AND password="'.$password.'" AND dolgnost="'.$dolgonst.'"';
	$result = mysqli_query($link, $query); 
	$user = mysqli_fetch_assoc($result);
	if (!empty($user)) {
		header('Location:create.php'); 
	} else {
		echo 'Пользователь неверно ввел логин или пароль.';
	}
}
	}
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<link href="css/style.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="login.php" id="login" method="post"name="login">
<p><label for="user_name1">Логин пользователя<br>
<input class="input" id="user_name" name="user_name"size="20"
type="text" value=""></label></p>
<p><label for="password1">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
  <p><label for="dolgnost1">Должность<br>
  <input class="input" id="dolgnost" name="dolgnost"size="20"
  type="dolgnost" value=""></label></p> 
	<p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
	<p class="regtext">Есть аккаунт?Нет?<a href= "register.php">Нажмите чтобы Зарегистрироваться</a>!</p>
   </form>
 </div>
  </div>
</body>
</html> 
