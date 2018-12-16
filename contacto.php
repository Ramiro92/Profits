<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Principal</title>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/miestilo.css">
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
  <header>
    <?php 
    include("menu.php");
     ?>
<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">ASESEM</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contactenos</li>
  </ol>
</nav> -->
  </header>
<br>
  <section >
    <div class="container">
      <div class="row">
      	<div class="col-md-6">
        	<div class="">
             <h2>Escríbenos tus dudas</h2>
                <form  id="form" action="formulario.php"  method="post" >
                  <fieldset>
                    <div>
                      <input class="form-control" type="text" name="nombre" placeholder="Nombres" required>
                      <br>
                    </div>
                    <div>
                      <input class="form-control" type="text" name="apellido" placeholder="Apellidos" required >
                      <br>
                    </div>
                    <div>
                      <input class="form-control" type="text"  name="correo" placeholder="Correo" required >
                      <br>
                    </div>
                    <div>
                      <input class="form-control" type="tel"  name="tel" placeholder="Telefono"  maxlength="8" required pattern="[0-9]{8,8}+">
                      <br>
                    </div>
                    <div>
                    <textarea class="form-control" name="mensaje" required></textarea>
                    <br>
                    </div>
                   <div ><a><input class="form-control btn btn-success" type="submit" name="boton" value="Enviar" ></a>
                    <br>
                    </div>
                  </fieldset> 
                </form> 
            </div>  
       </div> <!-- fin de col-md-6 *1-->
<!--        <div class="col-md-6">
		<h2>Chat Interactivo</h2>
		  <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
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
			<div >
			  <div id="chat"></div>
			</div>
		<div>
			<form method="POST" action="contacto.php">
			  <div>
			  <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre" required>
			  </div>
			  <div>     
			  <textarea name="mensaje" class="form-control" placeholder="Ingresa tu mensaje" required=""></textarea>
			  </div>
			  <div>
			  <input type="submit" name="enviar" class="form-control btn btn-primary" value="Enviar">
			  </div>
			</form>
		</div>
 	 </div><!-- fin de col-md-6 *2--> -->
 
</div> <!-- fin de row -->
</div> <!-- fin div container -->
  </section> 
<br>
<?php 
include("footer.php"); 
?>
</body>




<script src="JS/jquery.js" type="text/javascript"></script>
<script src="JS/bootstrap.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  var altura = $('.menu').offset().top;
  
  $(window).on('scroll', function(){
    if ( $(window).scrollTop() > altura ){
      $('.menu').addClass('menu-fixed');
    } else {
      $('.menu').removeClass('menu-fixed');
    }
  });

});
</script>
</html>