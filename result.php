<?
session_start();
include "create_sorev.php";
$_SESSION['sorev'];
$sorev=$_SESSION['sorev'];
$stroka=$_POST["stroka"];
$stroka1=implode("`,`",$stroka);
$forma_dannih=$_POST["forma_dannih"];
$forma=implode("','",$forma_dannih);
$link=mysqli_connect("localhost", "root", "root","diplom") 
           or die("Ошибка " . mysqli_error($link));
           $query="INSERT INTO  $sorev (`$stroka1`) VALUES ('$forma')";
           $result=mysqli_query($link,$query);
           ?>
<html>
<head>
<link rel="stylesheet" href="style1.css"/>
</head>
<body>
<a href="vibor_komandi.php">Вернуться к выбору команды</a>
</body>
</html>