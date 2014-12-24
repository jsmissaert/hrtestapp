<?php 
$server = "localhost";
$username = "hrtestappuser"; 
$password = "QLwWQ4Q7HRsCaFa5"; 
$database = "hrtestapp"; 

mysql_connect("$server", "$username", "$password") or die(mysql_error()); 
mysql_select_db("$database") or die(mysql_error()); 
?>
