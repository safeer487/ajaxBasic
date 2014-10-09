<?php
echo "Respuesta:\n\n";
if(strlen($_POST["fecha_nacimiento"]) == 0) {
	echo "-Fecha vacia\n";
}
if(strlen($_POST["codigo_postal"]) == 0) {
	echo "-Postal vacia\n";
}
if(strlen($_POST["telefono"]) == 0) {
	echo "-Telefono vacia\n";
}
?>
