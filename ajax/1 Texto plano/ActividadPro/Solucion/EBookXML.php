<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
#DivGris {
	background-color: #999;
	height: 575px;
	width: 400px;
	margin-top: 100px;
	border-radius: 20px;
	padding-top: 25px;
}

#DivPantalla {
	background-color: #FFC;
	clear: both;
	height: 500px;
	width: 350px;
	margin-left: 25px;
	margin-right: 25px;
	margin-bottom: 10px;
	font-family: "Lucida Console", Monaco, monospace;
	font-size: 16px;
	text-align: left;
	vertical-align: middle;
	}
</style>
</head>

<body>
	<center>
	<div id="DivGris">
    <div id="DivPantalla"></div>
	<input type="button" name="retroceder" id="boton1" onClick="retrocederHoja()" value="<---">
    <input type="button" name="avanzar" id="boton2" onClick="cambiarHoja()" value="--->"><hr>
	</div>
    </center>
</body>
</html>

<script type="text/javascript">

function leerDatos(){
	if (oXML.readyState == 4) {
		document.getElementById("DivPantalla").innerHTML = oXML.responseText
	}
}


function AJAXCrearObjeto(){
	var obj;
	if(window.XMLHttpRequest) { // no es IE
		obj = new XMLHttpRequest();
	} else { //Es IE o no tiene el objeto
		try {
			obj = new ActiveXObject("Microsoft.XMLHTTP");	
		} catch (e) {
			alert('El navegador utilizado no está soportado');	
		}
	}
	return obj;
}

var iPos = 1
function cambiarHoja() {
	oXML = AJAXCrearObjeto();
	oXML.open('GET', 'TextoCuervo' + iPos + '.txt');
	oXML.onreadystatechange = leerDatos;
	oXML.send('');
	iPos++
	if(iPos > 5) {
		iPos = 5
	}
}

function retrocederHoja() {
	oXML = AJAXCrearObjeto();
	oXML.open('GET', 'TextoCuervo' + iPos + '.txt');
	oXML.onreadystatechange = leerDatos;
	oXML.send('');
	iPos--
	if(iPos < 1) {
		iPos = 1
	}
}
</script>