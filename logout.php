<?php
	session_start();
	 include("conexion.php");

 if(isset($_SESSION['user']))
 {
	session_destroy();
	header("servios.php");
	}
	 else{
	 echo "Error";
	 }
?>