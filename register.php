<?
include "create.php";
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
		<title>Регистрация</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="style1.css"/>
	</head>
	<body>
<div class="container mregister">
<div id="login">
 <h1>Регистрация новых судей</h1>
<form action="register.php" id="registerform" required method="post"name="registerform">
 <p><label for="user_login">Имя<br>
 <input class="input" id="first_name" name="first_name"size="32" required type="first_name" value=""></label></p>
 <p><label for="user_login">Фамилия<br>
 <input class="input" id="last_name" name="last_name"size="32" required type="last_name" value=""></label></p>
<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" required value=""></label></p>
<p><label for="user_pass">Имя пользователя<br>
<input class="input" id="user_name" name="user_name"size="32" type="user_name" required value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32" required  type="password" value=""></label></p>
<p><label for="user_pass">Должность<br>
<select  method="POST" name="role">
<option value="2"> Судья</option>
<option value="3">Гл.Cудья</option>
</select>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрировать судью"></p>
 </form>
</div>
</div>
</body>
</html>
<?php
$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
if(isset($_POST["register"])){
	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['user_name']) && !empty($_POST['password']) && !empty($_POST['role'])) {
$first_name= ($_POST['first_name']);
$last_name= ($_POST['last_name']);
$email=($_POST['email']);
$user_name=($_POST['user_name']);
$password=($_POST['password']);
$role=($_POST['role']);
$query="SELECT * FROM sudi";
$sql="INSERT INTO sudi
  (first_name,last_name, email,user_name, password, role)
	VALUES('$first_name','$last_name','$email', '$user_name', '$password', '$role')";
  $result=mysqli_real_query($link, $sql);
 if($result){
	echo "Пользователь с логином $user_name успешно создан";
} else {
 echo "Ошибка создания пользователя!";
  }
}
}
?>
