<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
	<h2>Ahora estoy</h2>
	<input type="button" onclick="actualizar()" value="Actualizar">

	<div id="estado"></div>

<script>
 function leerDatos(){
    if (oXML.readyState == 4) {
       document.getElementById("estado").innerHTML = oXML.responseText
    }
  } 
  function AJAXCrearObjeto(){
    var obj;
    if(window.XMLHttpRequest) { // no es IE
      obj = new XMLHttpRequest()
    } else { // Es IE o no tiene el objeto
       try {
         obj = new ActiveXObject("Microsoft.XMLHTTP");
      }  catch (e) {
        alert('El navegador utilizado no está soportado');
      }
    }
    return obj
  } 
   
  function actualizar() { //solo podemos llamar una vez en una bloc
  	console.log('dfdf')
    oXML = AJAXCrearObjeto()
    oXML.open('GET', 'miEstado.txt')
    oXML.onreadystatechange = leerDatos
    oXML.send('')
  }
	
</script>	
</body>
</html>