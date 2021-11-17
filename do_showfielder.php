<?
include "glsud.php";
if (!$_POST['table_name'] || !$_POST['num_fields']) {
	echo $_POST['num_fields'];
	header ("location: show_createtable.php");
}
$form_block = "
<FORM METHOD=\"POST\" ACTION=\"do_createtable.php\" name=\"some_name\">
<input type=\"hidden\" name=\"table_name\" value=\"$_POST[table_name]\">
<table cellspacing=5 cellpadding=5 name=\"table_name2\">
<tr>
<th>Имя поля</th><th>Тип данных</th><th>Длина поля</th>
";
for ($i = 0 ; $i <$_POST['num_fields']; $i++){

$form_block .= "
<tr>
<td ALIGN=center> <input id=\"id[$i]\" required  type=\"text\" name=\"name-$i\" size=\"30\">
<td align=center>
<SELECT  NAME =\"field_type-${i}\">
<option  value =\"INT\">int</option>
<option value =\"TIME\">time</option>
<option value =\"TEXT\">text</option>
<option value =\"VARCHAR\">varchar</option>
</SELECT>
</td>
<td ALIGN=CENTER> <input id=\"id1[$i]\" required  type=\"text\" name=\"lenght-$i\" size=\"5\">
</td>
</tr>
";
}
$form_block .="
<tr>
<td align=center colspan=3> <input type=\"submit\" value=\"Создать таблицу\">
</tr>
";
?>
<html>
<head>
<title> Создание полей и типов данных</title>
</head>
<body>
<h1> Определите типы данных для протокола <? echo " ", $_POST['table_name']; ?></h1>
<? echo $form_block; ?>

</body>
</html>
<script>
document.getElementById('id[0]').value='Nomer_komandi';
document.getElementById('id[1]').value='Name_komandi';
document.getElementById('id1[0]').value='11';
document.getElementById('id1[1]').value='20';
</script>
