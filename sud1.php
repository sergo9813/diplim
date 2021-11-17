<?include "glsud.php";?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
<title>Выбор таблицы</title>
</head> 
<body>
<h2>Выберите протокол для экспорта</h2>
<form  method="post" action="prosmotr.php">
<p><?php
$link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
$sql = "SHOW TABLES WHERE tables_in_diplom NOT LIKE 'sudi' and tables_in_diplom NOT LIKE 'komandi'";
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
<P><input type="submit" value="Посмотреть протокол">
   </form>
</body>
</html> 