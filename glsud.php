<?session_start();?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
	<link href="style1.css" type="text/css" rel="stylesheet">
<meta charset="utf-8">
</head> 
<body>
<p align="right"><?echo "Пользователь:" .$_SESSION['user_name'];?></p>
<h1>Выберите действие</h1>
<form  method="post" action="prosmotr.php">
<table>
		<tr>
			<td> <a href="sozdanie_komandi.php">Добавить новую команду</a></td>
			<td><a href="show_createtable.php" >Добавить новые соревнования</a>
			<td><a href="sud1.php">Посмотреть результаты протоколов</a>
			<td> <a href="drop.php">Удалить завершенные соревнования</a></td>
			<td> <a href="delete_komand.php">Удалить команду</a></td>
			<td><a href="index.php" >Выход</a>
		</tr>
</table>
   </form>
</body>
</html> 