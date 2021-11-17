<?session_start();

?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style1.css"/>
</head> 
<body >
<p align="right"><?echo "Пользователь:" .$_SESSION['user_name'];?></p>
<h1>Выберите действие</h1>
<table>
		<td><a href="register.php" >Создать новый аккуант судьи<a>
		<td><a href="admin_drop.php" >Удаление аккаунтов судей<a>
		<td><a href="index.php" onclick="ask(); return false;">Выход<a>
   </table>
</body>
</html> 
<script>
function ask() {
var s = session_destroy();
if(s) {
document.forms['form1'].submit();
  }
}
</script>