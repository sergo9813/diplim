<? 
include "create_sorev.php"?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
	<title>Выбор протокола</title>
<meta charset="utf-8">
</head> 
<body>
<h1>Выберите протокол который хотите заполнить</h1>
<form  method="post" action="vibor_komandi.php">
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
while ($row = mysqli_fetch_array($result)) {
    print '<option value='.$row[0].'>'.$row[0].'</option>';
}
print '</select>';

?>
<P><input type="submit" value="Приступить к заполнению">
   </form>
</body>
</html> 
   </form>
</body>
</html> 