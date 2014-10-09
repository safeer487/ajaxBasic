<?php 

$sNom = $_POST['nombre'];
$sAsunto = $_POST['asunto'];
$sMail = $_POST['email'];
$sMensaje = $_POST['mensaje'];



//los campos no pueden estar vacios
if($sNom == '' || $sAsunto == '' || $sMail == '' || $sMensaje == ''){
	echo "Los campos no pueden estar vacios";
}

if(mail($sMail, $sAsunto, $sMensaje)){
	echo "Gracias por enviar";
}else{
	echo "no hay nada";
}



 ?>