<?session_start();?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style3.css"/>
</head> 
<body >
<p align="right"><?echo "Пользователь:" .$_SESSION['user_name'];?></p>
<table>
		<td>Выберите действие:</td>
		<td><a href="sud.php" >
        <p><strong>Выбрать протокол</strong><br></td>
		<td><a href="index.php" >
		<p><strong>Выход</strong><br></td>
   </table>
</body>
</html> 