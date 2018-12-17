<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS/miestilo.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.6.1-web/css/all.css">

	<title>Principal</title>
</head>
<body>
<header>
	<!-- <img id="logo" src="IMG/LOGO.png" class="img-fluid" alt="Responsive image">	 -->
		<?php 
			include("menu.php");
 		?>
 		<?php 
			include("slide.php");
 		?>
	<div class="container-fluid">			
		<div class="row">
 		<div class="col-md-12">
 			<h1>Bienvenidos</h1>
 			<br>
 			<br>
 			<h5 class="text-justify">Tu visita es importante para nosotros, estamos para servirte en asesoría y educación financiera. 
Te invitamos a navegar por todo el sitio. 
</h5>
		</div>
		<div class="col-md-6">
			<br>
			<br>
			<img src="IMG/para enlazar con el curso.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="col-md-6">
			<br>
			<br>
			<img src="IMG/para enlazar con los brokers.png" class="img-fluid" alt="Responsive image">
		</div>
		</div>
		</div>
</header>
<br>
<br>	
 		<?php 
 			include("footer.php");
 	 	?>		
</body>
<script src="JS/jquery.js" type="text/javascript"></script>
<script src="JS/bootstrap.js" type="text/javascript"></script>
</html>