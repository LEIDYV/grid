<!DOCTYPE html>
				
<html lang="es">
<head> 

	<meta charset="UTF-8">
	<meta name="keywords" content="sfconsultores,contpaqui, contabilidad">
	<meta name="description" content="esta es mi pagina">
	
	<title>sfconsultores</title>
	
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"> 
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="estilos.css"> 
	
		
</head> 
	<body>
	<header>
					
				<div class="container">
					<div class="row">
					<div class=" col-md-4 ">
							<h1>SF CONSULTORES</h1>
							<h4>DISTRIBUIDOR ASOCIADO</h4>
					</div>
					<br>
					<br>
					<div class=" col-md-8">
						<nav>
							<ul>
								<li role="presentation" > <a href="index.html"> INICIO </a></li>
								<li role="presentation" > <a href="nosotros.php"> NOSOTROS </a></li>
								<li> 
								<a href="#">PRODUCTOS</a>
							<div>
								<ul>
									<li role="presentation" class="dropdown-header" >SISTEMAS</li>
									<li role="presentation" ><a href="contabilidad.php">Contpaqi Contabilidad</a></li>
									<li role="presentation" ><a href="nomina.php">Contpaqi Nómina</a></li>
									<li role="presentation" ><a href="bancos.php">Contpaqi Bancos</a></li>
									<li role="presentation" ><a href="comercial.php">Contpaqi Comercial</a></li>
									<li role="presentation" ><a href="crm.php">Contpaqi CRM</a></li>
									<li role="presentation" ><a href="produccion.php">Contpaqi Producción</a></li>
									<li role="presentation" ><a href="factura.php">Contpaqi Factura Electrónica </a></li>
									<li role="presentation" ><a href="puntoventa.php">Contpaqi Punto de venta</a></li>
								</ul>
						
								<ul>
									<li role="presentation" class="dropdown-header" >APLICACIONES</li>	
									<li role="presentation" ><a href="cfdifactura.php">Contpaqi CFDI Facturación En Línea+</a></li>
									<li role="presentation" ><a href="bussiness.php">Contpaqi Business Intelligence+</a></li>
									<li role="presentation" ><a href="xml.php">Contpaqi XML En Línea+</a></li>
									<li role="presentation" ><a href="binder.php">Contpaqi Binder</a></li>
									<li role="presentation" ><a href="gastos.php">Contpaqi Gastos</a></li>
								</ul>
							</div>	
								</li>	
									<li role="presentation" ><a href="soporte.php">SOPORTE </a></li>
									<li role="presentation" ><a href="puntoventa.php">CONTACTANOS</a></li>
							</ul>
						</nav>		
					</div>	
				</div>
				
			</header>
			<?php
			session_start ();
			include("conexion.php");
			 if(isset($_SESSION['user'])){
		
			?>

		<div align="center">
			<div class="container">
					<img src="imagenes\sfcon.png">
					<br>
					<table width="800" height="500">
					<form method="post" action="promen.php">
						<tr>
						<td> <iframe src="mensajes.php" name="iframe" width="700" height="500"></iframe> </td> 
						</tr> 
						<tr>
						<td> <input type="text" size="77" name="mensaje"/> <button type="submit" name="enviar" class="btn btn-primary">Enviar Mensaje </button> </td> 
						</tr> 
							<td> Estas conectado como <strong><?-$_SESSION['user']?></strong></td> 
						</tr>
					</form>
					</table> 	
					
			</div>	
		</div>		
		<?php

		}
			?>
					
					<script src="http://code.jquery.com/jquery-latest.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
	</html>