<?php
	session_start();
	 include("conexion.php");

 if(isset($_POST['enviar']))
 {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$select= "SELECT idUsuario, usuario, contrasenia,rango FROM autentificacion WHERE usuario='".$user."' AND contrasenia='".$pass."'"; 
	$query= mysql_query($select, $conex);
	$rows = mysql_num_rows($query);
	if($row = mysql_fetch_array($query))
		{
	  $_SESSION['usuario'] = $row ['user'];
	  $_SESSION['idUsuario'] = $row ['idUsuario'];
	  $_SESSION['rango'] = $row ['rango'];
	  
	  header("Location:chat.html");
		}
		else{
			echo "El usuario o la contraseña son invalidos";
			 header('refresh:2; servicios.php');
		}
	} 
	 
?>