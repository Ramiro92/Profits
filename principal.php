<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>CHAT CON PHP, MYSQL Y AJAX</title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/miestilo.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.6.1-web/css/all.css">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body onload="ajax();">

	<div id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>
<div>
		<form method="POST" action="principal.php">
			<div>
			<input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
			</div>
			<div>			
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			</div>
			<div>
			<input type="submit" name="enviar" value="Enviar">
			</div>
		</form>
</div>
		<?php
			if (isset($_POST['enviar'])) {
				
				$nombre = $_POST['nombre'];
				$mensaje = $_POST['mensaje'];


				$consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

				$ejecutar = $conexion->query($consulta);

				if ($ejecutar) {
					echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
				}
			}

		?>
	</div>

</body>
</html>