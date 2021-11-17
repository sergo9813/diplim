<?session_start();
$_SESSION['user_name']=$_POST["user_name"];
?>
<?php
session_start();
	if(isset($_POST["login"])){
        $link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
		$user_name=($_POST['user_name']);
		$password=($_POST['password']);
			if(!empty($_POST['user_name']) && !empty($_POST['password'])) {
				$query ='SELECT * FROM sudi WHERE user_name="'.$user_name.'" AND password="'.$password.'"';
				$result = mysqli_query($link, $query); 
                $data = mysqli_fetch_array($result);
				if ($data[6]==1) {
                    header("Location:create.php");
				}
				if($data[6]==2){
					header("Location:create_sorev.php");
	  			 }
				if($data[6]==3){
					header("Location:glsud.php");
	   			}
				else {
					echo 'Пользователь неверно ввел логин или пароль';
				}
            }   
    }
    if(!isset($_POST["login"])){
}
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<title>Страница входа </title>
    <meta charset="utf-8">
</head> 
<body>
    <div class="container mlogin">
    <div id="login">
    <h1>Вход</h1>
    <form action="index.php"  method="post" >
        <p>
            <label for="user_name1">Логин пользователя<br>
            <input class="input" id="user_name" name="user_name"size="20" type="text" value=""></label>
        </p>
        <p>
            <label for="password1">Пароль<br>
            <input class="input" id="password" name="password"size="20" type="password" value=""></label>
        </p> 
        <p>
            <input id="login" name="login" class="button"type= "submit" value="Log In">
        </p>
    </form>
    </div>
    </div>
</body>
</html> 