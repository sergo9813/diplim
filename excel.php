<?
	header('Content-Type: application/vnd.ms-excel; charset=utf-8');
	header("Content-Disposition: attachment; filename="."sorev".".xls");
	header("Content-Transfer-Encoding: binary ");
session_start();
if(isset($_POST['sorev'])){
   $_SESSION['sorev']=$_POST['sorev'];
   $table_name = $_SESSION['sorev'];
}
else{
   $table_name = $_SESSION['sorev'];
}
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="excel.php" >
<?
           $link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
           $query="select * FROM $table_name" ;
           $result=mysqli_query($link,$query);
           $query1="SHOW columns FROM $table_name" ;
           $result1=mysqli_query($link,$query1);
           ?>
    <table class="insert" name=table>
    <? echo " Название $table_name"?> 
      <tr>
            <?
            $result1=mysqli_query($link,$query1);
            $count=0;
            while ($row1 = mysqli_fetch_array($result1)){?>
            <th><?echo $row1[0];?></th>
            <? $count++;
         }?> 
      </tr>
      <tr>
            <?$result=mysqli_query($link,$query);
            while ($row = mysqli_fetch_array($result)){
               for($i = 0 ; $i<$count; $i++){?>
              <th> <? echo $row[$i];?>
               <?}
               ?>
               </tr>
            <?}?>
      </tr>
    </table>
   </form>
</body>
</html>  