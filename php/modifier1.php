<?php
$num= $_POST['num'];
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$cin= $_POST['cin'];
$sex= $_POST['sex'];
$date_n= $_POST['date_n'];
$tel= $_POST['tel'];
$date_e= $_POST['date_e'];
$situation_fam= $_POST['situation_fam'];
$nbr_enfant=$_POST['nbr_enfant'];
$sb=$_POST['sb'];
//echo "".$num.$nom.$prenom.$cin.$sex.$date_n.$tel.$date_e.$situation_fam.$nbr_enfant.'<br>'.$sb;

mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
mysql_query("update personnel set nom='$nom' ,prenom='$prenom', cin='$cin', sex='$sex', date_naissance='$date_n', tel='$tel', date_embauche='$date_e', situation_fam='$situation_fam', nbr_enfant=$nbr_enfant , salaire_base=$sb where num_p=$num");
header("Location: liste_personnel.php");
?>