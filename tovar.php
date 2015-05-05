<?php
function connect_base(){
	$mysqli = new mysqli
	("localhost", "admin", "12345","store");
return $mysqli;
}
function cOrder ($fio="", $mail="",$item="",$number=""){
	$mysqli=connect_base();
	$mysqli->query("INSERT INTO order(fio, mail, item, number)
VALUES ('$fio', '$mail','$item','$number')");}
?>

<body>
<form method = "POST", action="">
<table>
<tr>
<td><p>Name</p>
<td>
<input type=text name="fio" size=23 value='' maxlength=30>
<TR>
<td>
<p>E-mail</p>
<td>
<input type=text name="mail" size=23 value='' maxlength=30>
<tr>
<td>
<p>Item</p>
<td><select name="item">
<option name="12 p" value="Copybook 12p">Copybook 12 p.</option>
<option name="24 p" value="Copybook 24p" >Copybook 24 p.</option>
<option name="48 p" value="Copybook 48p"> Copybook 48 p. </option>
<option name="pen"value="Pen"> Pen </option>
</select>
</td>
<td> 
<p><input name = "number" type="number" min="1" max="50" step="1" value="1">
pcs</p>
</tr>
<tr>
<td>
<p>Info </p>
<td>
<TEXTAREA type=text name="inf">
</TEXTAREA>
</table>
<input type=submit value='Send'>
<?php
cOrder($_POST[fio],$_POST[mail],$_POST[item],$_POST[number]);
?>