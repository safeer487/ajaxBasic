<?php
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("cantantes", $conexion);
$sNombre = $_GET['nombre'];

$sSQL = '';
if(strlen($sNombre) > 0) {
	$sSQL = "SELECT nombre FROM personas WHERE 
	nombre LIKE '".$sNombre."%';";
	$resultados = mysql_query($sSQL, $conexion);
	while($aDatos = mysql_fetch_assoc($resultados)) {
		echo $aDatos['nombre'].'<br>';	
	}
}


?>