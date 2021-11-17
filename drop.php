<?php
$_POST['sorev'];
$sorev=$_POST['sorev'];
include "glsud.php";
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<title>Удалить протокол</title>
</head> 
<body>
<h1>Выберите протокол для удаления</h1>
<form  method="post" action="drop.php">
<?php
$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
$sql = "SHOW TABLES WHERE tables_in_diplom NOT LIKE 'sudi' and tables_in_diplom NOT LIKE 'komandi'";
$sql1="DROP TABLE `diplom`.`$sorev`";
$result1=mysqli_query($link,$sql1);
if ($result1) {
    echo "Протокол $sorev удален ";
    exit;
}
$result = mysqli_query($link,$sql);
if (!$result) {
    echo 'Ошибка базы, не удалось получить список таблиц\n';
    exit;
}?>
<legend> Название протокола:
<?print '<select name="sorev">';
while ($row = mysqli_fetch_row($result)) {
    print '<option value='.$row[0].'>'.$row[0].'</option>';
}
print '</select>';
?>
<P><input type="submit" onclick="ask(); return false;">
   </form>
</body>
</html> 
<script>
function ask() {
var s = confirm("Вы уверены?");
if(s) {
document.forms['form1'].submit();
  }
}
</script>