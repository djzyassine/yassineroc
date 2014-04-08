<?php

$h25= $_POST['h25'];
$h50= $_POST['h50'];
$h100= $_POST['h100'];
$mutuelle= $_POST['mutuelle'];
$nbrjour= $_POST['nbrjour'];
$nbrheure= $_POST['nbrheure'];
//echo "insert into open_comptable.heure_sup values('$num','$h25','$h50','$h100','".date('Y/m/d')."');";
mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
try {
    mysql_query("update minoration set cnss=$h25,amo=$h50,cimr=$h100,mutuelle=$mutuelle,nbrjour=$nbrjour,nbrheure=$nbrheure;");
   header("Location: traitement_salaire.php");
} catch (Exception $ex) {
    echo "".$ex;
 }

?>