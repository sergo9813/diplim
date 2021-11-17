<?
session_start();
$kom=$_POST['kom'];
if(isset($_POST['sorev'],$_POST['kom'])){
   $_SESSION['sorev']=$_POST['sorev'];
   $table_name = $_SESSION['sorev'];
}
else{
   $table_name = $_SESSION['sorev'];
}

include "create_sorev.php";
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
   <title>Заполнение протокола</title>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="result.php" >
<?
           $link=mysqli_connect("localhost", "root", "root","diplom") 
           or die("Ошибка " . mysqli_error($link));
           $query="SHOW columns FROM $table_name" ;
           $query1="Select name_komandi FROM komandi WHERE nomer='$kom' ";
           $result1=mysqli_query($link,$query1);
           $result=mysqli_query($link,$query);
           while ($row1 = mysqli_fetch_assoc($result1)){
            $name=$row1['name_komandi']; 
         }
           ?>
           <P><? echo " Название протокола '$table_name' ";?>
    <table name="table">
    <tr>
     <?
            $result=mysqli_query($link,$query);
            while ($row = mysqli_fetch_array($result)){?>
               <td><input type="textarea" size="6" readonly="readonly" style="background-color:white;" name="stroka[]"value="<?echo $row[0]?>"></td>
              <?}
               ?> </tr>
               <tr>
           <?$i=0;
           $result=mysqli_query($link,$query); 
           while ($row = mysqli_fetch_array($result)){?>
               <td><input id="forma[<?echo $i?>]" type="text" size="6" name="forma_dannih[]"></td>
               <?
            $i++;}?>  
               </tr> 
</table>
    <P><input type="submit" value="Добавить">
   </form>
</body>
</html>
<script>
document.getElementById('forma[0]').value='<?echo $kom?>';
document.getElementById('forma[1]').value='<?echo $name?>';
</script>