<?php
   include("bd.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['nombre']);
      $mypassword = mysqli_real_escape_string($db,$_POST['contraseña']); 
      
      $sql = "SELECT id FROM usuarios WHERE nombre = '$myusername' and contraseña = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
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
 		<div class="container">
 			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<form action="" method="post">
						<div>
							<br>
							<label>Usuario</label>
							<input class="form-control" type="text" name="usuario" placeholder="Usuario">
						</div>
						<div>
							<br>
							<label>Contraseña</label>
							<input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
						</div>
						<div>
							<br>
							<input class="btn btn-primary" type="submit" value="Ingresar">
						</div>
					</form>
					<br>
				</div>
 			</div>
 		</div>
</header>	
 		<?php 
 			include("footer.php");
 	 	?>		
</body>
<script src="JS/jquery.js" type="text/javascript"></script>
<script src="JS/bootstrap.js" type="text/javascript"></script>
</html> 		