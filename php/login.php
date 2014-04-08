<?php
$login= $_POST['login'];
$pass= $_POST['password'];
//echo "".$login."<br>".$pass;

mysql_connect('localhost','root','');
mysql_select_db('open_comptable');
$query=mysql_query("select * from utilisateur where login='$login' and password='$pass'");
if($rows=mysql_fetch_array($query))
{
  
   header("Location:http://localhost:8080/oc/index_root.html");
}
else

header("Location: http://localhost:8080/oc/login.html");
?>