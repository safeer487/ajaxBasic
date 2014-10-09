<?php
//Recogemos los datos
$sDireccion = '';
$sUsuario = '';
$sClave = '';
$sNomBD = '';
if(isset($_POST['enviado'])) {
	$sDireccion = $_POST['direccion'];
	$sUsuario = $_POST['usuario'];
	$sClave = $_POST['clave'];
	$sNomBD = $_POST['nombreBD'];
	//Guardamos los datos en un JSON
	$aDatos = array(
		'direccion' => $sDireccion,
		'usuario' => $sUsuario,
		'password' => $sClave,
		'nombreBaseDatos' => $sNomBD
		);
	$fh = fopen("conf.json", 'w')
      or die("Error al abrir fichero de salida");
	fwrite($fh, json_encode($aDatos, JSON_UNESCAPED_UNICODE));
	fclose($fh);
} else if(file_exists("conf.json")) {
	$str_datos = file_get_contents("conf.json");
	$datos = json_decode($str_datos,true);
	$sDireccion = $datos['direccion'];
	$sUsuario = $datos['usuario'];
	$sClave = $datos['password'];
	$sNomBD = $datos['nombreBaseDatos'];
}

?>
<html>
<body>
	<section>
		<form action="install.php" method="post" name="formConf">
			<center>	
				<h2>Configuracion base de datos</h2>
				Direccion: <input type="text" name="direccion" value="<?php echo $sDireccion; ?>"><br>
				Usuario: <input type="text" name="usuario" value="<?php echo $sUsuario; ?>"><br>
				Clave: <input type="text" name="clave" value="<?php echo $sClave; ?>"><br>
				Nombre Base de datos: <input type="text" name="nombreBD" value="<?php echo $sNomBD; ?>"><br>
				<input type="submit" name="enviado" value="Guardar">
			</center>	
		</form>
	</section>
</body>
</html>