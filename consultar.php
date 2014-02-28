<?php

$db = mysql_connect("127.0.0.1", "root","usrio01");
mysql_select_db("sena",$db);

$sql = "select * from personas";
$result = mysql_query($sql);

echo "<table border='1'>";
echo "<tr>";
echo "<td>Nombre</td>";
echo "<td>Direccion</td>";
echo "</tr>";

while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[1]</td><td>$row[2]</td></tr>"; 
} 
echo "</table>"; 

?>