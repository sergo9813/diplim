<?php
include "glsud.php";
$_POST['table_name'];
$arr_length = count($_POST)/3;
$connection = mysqli_connect("localhost","root","root","diplom")
or die ("Невозможно подключиться к бд");
$sql ="create table `diplom` . `$_POST[table_name]` (";
for($i=0; $i<=$arr_length-1; $i++){
$index0 ='name-'.$i;
$index0 = $_POST[$index0];

$index1 ='field_type-'.$i;
$index1 = $_POST[$index1];

$index3 ='lenght-'.$i;
$index3 = $_POST[$index3];

$index4 ='field_type1-'.$i;
$index4 = $_POST[$index4];

$index5 ='field_type2-'.$i;
$index5 = $_POST[$index5];
$sql .= "`$index0` $index1($index3) NOT NULL" ;
    if ($index0 !=""){
        $sql .= ",";
    } else {
        $sql .=" ";
    }
}
$sql=substr($sql,0,-1);
$sql.= ")";
$result= mysqli_query($connection,$sql)
or die("Невозможно создать протокол");
if ($result) {
  echo  "<p>Протокол соревнований с именем $_POST[table_name]</p>";
}
?>