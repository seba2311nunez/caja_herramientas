<?php 
/* Conexion a la base de datos */
$conexion = mysql_connect('93.188.164.97', 'lgm1', 'Luis!2014');
mysql_select_db('caja_herramientas', $conexion);

if (!$conexion) {
     echo "<CENTER>
           Problemas de conexion con la base de datos.
           </CENTER>";
     exit();
}

session_start();

foreach($_REQUEST as $var=>$value){
 	$_GLOABLS[$var] = $value;
 	$$var = $value;
}  

header("Content-Type: text/html;charset=utf-8");
mysql_query("SET NAMES 'utf8'");

error_reporting(0);

?>