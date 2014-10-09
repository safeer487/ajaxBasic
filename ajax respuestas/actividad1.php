<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>Hospital Toito</h1>
<div id="divText"></div>
	
</body>
<script>
 function leerDatos(){
    if (oXML.readyState  == 4) { //estado lista
       document.getElementById("divText").innerHTML = oXML.responseText
    }
  } 
  function AJAXCrearObjeto(){
    var obj;
    if(window.XMLHttpRequest) { // no es IE //si no es internet explorer
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
   
  oXML = AJAXCrearObjeto()
  oXML.open('GET', 'doctores.txt') //open lo que hace es abre un puente.
  oXML.onreadystatechange = leerDatos  //Comprueba que si esta listo
  oXML.send('')  //que nos vamos a mandar
  </script>
</html>