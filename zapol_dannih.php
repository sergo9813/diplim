<?
           $link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
           $query="SHOW columns FROM $_POST[sorev] " ;
           $result=mysqli_query($link,$query);
           ?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="zapol_dannih.php" name="forma_zapol" >
    <table class="insert" name=table>
    <th>Строка</th>
    <th>Тип</th>
    <th>Форма заполнения</th>
        <tr> 
           <td> <?
            $result=mysqli_query($link,$query);
            while ($row = mysqli_fetch_row($result)){?>
               <tr>
               <td> <?echo $row[0];?></td>
               <td> <?echo $row[1];?> </td>
               <td><input type="text" name="forma_dannih"></td>
               </tr>
            <?}?>
    </table>
    <?
    $forma_dannih=$_POST['forma_dannih'];
    echo
   $forma_zapol=$_POST['forma_zapol'];
   echo $forma_zapol;
   $queryl="INSERT INTO $_POST[sorev] ('$row[0]')  VALUES (forma_dannih) ";
   $resultl=mysqli_query($link,$queryl);
   ?>
<P><input type="submit" value="Закончить">
   </form>
</body>
</html> 