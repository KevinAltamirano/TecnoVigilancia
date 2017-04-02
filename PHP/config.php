<?php 
// Datos para la conexion a mysql 
define('DB_SERVER','localhost'); 
define('DB_DATABASE','biomedica'); 
define('DB_USERNAME','root'); 
define('DB_PASSWORD',''); 

$con = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD); 
mysql_select_db(DB_DATABASE,$con); 
?>
