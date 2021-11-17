<?
setcookie("name",$_POST['sorev'],time()+3600,"/");
$_COOKIE["name"]=$_POST['sorev'];
$sorev=$_COOKIE["name"];
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="zapol.php" >
<?
           $link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
           $query="SHOW columns FROM $sorev " ;
           $result=mysqli_query($link,$query);
           ?>
    <table class="insert" name=table>
    <? echo " Название соревнований $sorev"?>
    <th>Строка</th>
    <th>Тип</th>
    <th>Форма заполнения</th>
        <tr> 
           <td> <?
            $result=mysqli_query($link,$query);
            while ($row = mysqli_fetch_array($result)){?>
               <tr>
               <td> <?echo $row[0];?></td>
               <td> <?echo $row[1];?> </td>
               <td><input type="text" name="forma_dannih"></td>
               </tr>
            <? }?>
    </table>
<P><input type="submit" value="Закончить">
   </form>
</body>
</html> 