<?php

$ced=$_POST["ced"];
$nom=$_POST["nombre"];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];

$db = mysql_connect("127.0.0.1", "root","usrio01");
mysql_select_db("sena",$db);

$sql = "INSERT INTO personas value($ced,'$nom','$dir',$tel,$cel)";
$result = mysql_query($sql);

echo "¡GraciaS";

?>varchar jajajajajaja
el rpofesor nos va poner mala nota ya saben varchar