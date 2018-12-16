﻿<?php
 
$para = "amayaramiro6@gmail.com";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$asunto = "Profitsfx";
$tel= $_POST["tel"];
$mensaje = $_POST["mensaje"];
$de = $_POST['correo']; 
 
$headers = "MIME-Version:1.0; \r\n";
$headers .= "Content-type: text/html; \r\n charset= utf-8_decode; \r\n";
$headers .= "From: $de; \r\n";
$headers .= "To: $para; \r\n Subject: $asunto;\r\n";
$msjCorreo = "Nombres: $nombre\r\n Apellidos: $apellido\r\n Telefono: $tel\r\n Mensaje:\r\n $mensaje";
 
if(mail($para, $asunto, $msjCorreo, $headers)){ 
 
echo "Mensaje enviado";
}
else{
echo "Error al enviar"; 
}
 
?>
</h2> 
<h2 align="center">Gracias!</h2> 
 
<p align="center">Tu mensaje ha sido enviado correctamente, pronto nos pondremos en contacto con usted.</p> 
<p align="center"> </p> 
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p> 
 
<p align="center">Si no es correcto, 
 
<script type='text/javascript'> 
 
document.write('<a href="javascript:history.go(-1);">vuelve atras</a>'); 
 
</script> 
 
<noscript>vuelve atras</noscript> y envialo de nuevo</p> 
 
<script type='text/javascript'> 
 
document.write('<p class="details"><a href="javascript:history.go(-2);">Volver a la página de inicio.</a></p>'); 
 
</script> 
 
<script type='text/javascript'> 
 
setTimeout('history.go(-2)', 10); 
 
</script> 
 
<noscript> 
 
<p align="center" class="details">Pulsa el boton "atras" en tu navegador para volver a la página anterior.</p> 
 
</noscript> 
