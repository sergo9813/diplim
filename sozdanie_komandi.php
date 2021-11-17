<?php
include "glsud.php";
$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
if(isset($_POST["register"])){
	if(!empty($_POST['nomer']) && !empty($_POST['name_komandi'])) {
$nomer= ($_POST["nomer"]);
$name_komandi= ($_POST["name_komandi"]);;
$query="SELECT * FROM `komandi`";
$sql="INSERT INTO `komandi` (`nomer`,`name_komandi`) VALUES('$nomer','$name_komandi')";
  $result=mysqli_real_query($link, $sql);
 if($result){
	echo "Команда создана";
} else {
 echo "Не удалось вставить информацию о данных!";
  }
	} else {
	echo "Это имя пользователя уже существует! Пожалуйста, попробуйте еще один!";
   }
}
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
	<meta charset="utf-8">
	<title>Создать команду</title> 
	<link rel="stylesheet" href="style1.css"/>
	</head>
	<body>
<div class="container mregister">
<div id="login">
 <h1>Создание команды</h1>
<form action="sozdanie_komandi.php" method="post"name="registerform">
 <p><label for="user_login">Номер команды<br>
 <input class="input" id="nomer" name="nomer"size="32"  type="nomer" required></label></p>
 <p><label for="user_login">Название команды<br>
 <input class="input" id="name_komandi" name="name_komandi"size="32"  type="name_komandi" required></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Добавить"></p>
 </form>
</div>
</div>
</body>
</html>