<?php
/* Lee el fichero en una variable, lo cual convierte su contenido a una estructura de datos (matriz) */
//Leer JSON
$str_datos = file_get_contents('datos.json');  //recoge datos
$datos = json_decode($str_datos,true); //traduce los datos recogidos en un array
 
//Imprime un resultado
echo 'Nombre del jefe: '.
$datos['responsable']['Nombre'].'<br>';

//Imprime varios resultados
echo 'Aficiones:';
foreach($datos['responsable']['Aficiones'] as $value) {
	echo $value.' ';
}
echo '<br>';
 
// Modificar
$datos['responsable']['Aficiones'][0] = 'Natación';
 
$fh = fopen('datos.json', 'w') //para insertar en un array
      or die('Error al abrir fichero de salida');
fwrite($fh, json_encode($datos,JSON_UNESCAPED_UNICODE));
fclose($fh);
?>