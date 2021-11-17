<?
print_r($_GET());
session_start();
if (isset($_POST["sorev"])){
   $_SESSION['sorev']=$_POST['sorev'];
   echo $_SESSION['sorev'];
?>
<!-- По кнопке clear у тебя удаляется выбранная таблица-->
<form action="end.php" method="POST">
    <button type="submit" name="clear">clear</button>
</form> 
<?
}
?>



<?
if (!isset($_POST["sorev"])){
?>
<!-- Вместо следующей формы ты вставляешь свою форму с таблицей -->
<form action="end.php" method="POST">
    <input type="text" name="sorev">
    <button type="submit">Send</button>
</form> 
<?
}
?>