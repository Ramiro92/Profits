<?php

$servidor   = "50.28.15.203";
$usuario    = "profitsf";
$password   = "NeoWEB/2018";
$base_datos = "profitsf_appchat";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


?>