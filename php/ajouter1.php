<?php
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
mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
//echo "".$nom.$prenom.$cin.$sex.$date_n.$tel.$date_e.$situation_fam.$nbr_enfant.'<br>'.$sb;
try {
    mysql_query("insert into personnel (nom,prenom,cin,sex,date_naissance,tel,date_embauche,situation_fam,nbr_enfant,salaire_base)values('$nom','$prenom','$cin','$sex','$date_n','$tel','$date_e','$situation_fam',$nbr_enfant,$sb)");
    header("Location: http://localhost:8080/oc/php/liste_personnel.php");
} catch (Exception $ex) {
    echo "".$ex;
}

?>