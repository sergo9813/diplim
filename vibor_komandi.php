<?
session_start();
if(isset($_POST['sorev'])){
    $_SESSION['sorev']=$_POST['sorev'];
    $table_name = $_SESSION['sorev'];
 }
 else{
    $table_name = $_SESSION['sorev'];
 }
include "create_sorev.php";?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
    <title>Выбор команды</title>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="zapol.php">
<h1>Выбор команды</h1>
<?php
$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
$sql = "SELECT nomer,name_komandi FROM komandi";
$result = mysqli_query($link,$sql);
if (!$result) {
    echo 'Ошибка базы, не удалось получить список таблиц';
    exit;
}?>
<legend> Название команды:
<?print '<select name="kom">';
while ($row = mysqli_fetch_array($result)) {
    print '<option value="'.$row[0].'">'.$row[0].'</option>';
}
print '</select>';
?>
<P><input type="submit" value="Выбрать">
   </form>
</body>
</html> 