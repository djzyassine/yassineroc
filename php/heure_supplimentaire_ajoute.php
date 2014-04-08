<?php
$num= $_POST['num'];
$h25= $_POST['h25'];
$h50= $_POST['h50'];
$h100= $_POST['h100'];

//echo "insert into open_comptable.heure_sup values('$num','$h25','$h50','$h100','".date('Y/m/d')."');";
mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
try {
    mysql_query("insert into open_comptable.heure_sup values('$num','$h25','$h50','$h100','".date('Y/m/d')."');");
   header("Location: liste_personnel.php");
} catch (Exception $ex) {
    echo "".$ex;
 }

?>