<?
session_start();
include "glsud.php";
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
        <title>Удалить команды</title>
<meta charset="utf-8">
</head> 
<body>
<form  method="post" action="admin_drop.php" >
<?
           $link=mysqli_connect("localhost", "root", "root","diplom") or die("Ошибка " . mysqli_error($link));
           if (isset($_GET['del'])){
              $id= $_GET['del'];
           }
           $query="select * FROM komandi" ;
           $result=mysqli_query($link,$query);
           $query1="SHOW columns FROM komandi" ;
           $result1=mysqli_query($link,$query1);
           $query2="DELETE FROM komandi WHERE id=$id" ;
           $result2=mysqli_query($link,$query2);
           ?>
    <table class="insert" name=table>
    <? echo "Список команд"?> 
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
              
               <?}?>
               <th><a href="?del=<?=$row[0]?>"onclick="ask(); return false;">Удалить</a>
               </tr>
            <?}?>
            </tr>
    </table>
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