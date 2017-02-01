<?php
	session_start();
	 include("conexion.php");
	  if(isset($_SESSION['user']) && $_SESSION['rango'] ==1)
		{
			
	 $id= $_GET['IdServicio'];
	 $delete= "DELETE FROM servicio WHERE IdServicio='".$id."'";
	mysql_query( $delete, $conex);
	header ("Location: mensajes.php");
		}else{
			echo"error";
			header ('refresh:2; mensajes.php');
		}
?>		