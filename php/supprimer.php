<?php
$num= $_GET['num'];
mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
$query= "delete from `open_comptable`.`personnel` WHERE num_p='$num'";
//echo $query;
mysql_query($query);

header("Location: http://localhost:8080/oc/php/liste_personnel.php");
?>