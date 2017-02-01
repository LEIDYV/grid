<?php
error_reporting (E_ALL^E_NOTICE^E_WARNING);
$conex = mysql_connect("localhost","root","") or die ("ERROR en la conexion con el servidor MySQL");

mysql_select_db("sfconsultores",$conex) or die ("Error al abrir la Base de Datos");

?>
