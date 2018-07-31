<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script type="text/javascript" src="../../JS/dom-drag.js"></script>
</head>
	<style>
		#tareas{
			border: none;
			width: 100%;
			height: 50vh;
		}
		#calendario{
			width: 97%;
			height: 60vh;
			border: none;
		}
		#divcalendario{
			resize: both;
    		overflow: hidden;
			width: 40%;
			height: 70vh;
			position: absolute;
			right: 1%;
			bottom: 1%;
			border: 1px solid grey;
		}
		#date{
			border: none;
			text-align: center;
			font-size: 20px;
		}
	</style>
<body onLoad="date()">
	
	<div id="tareas">
	</div>
	
	<div id="divcalendario" title="Mueveme">
		<center>
			<br>
			<input type="month" id="date" onChange="date()" value="<?php echo date("Y-m");?>">
			<br>
			<iframe id="calendario" src=""></iframe>
		</center>
	</div>
	
	<div id="ayuda" style="float: left">
		<table border="1px">
			<tr><th colspan="2">Accesos de busqueda</th></tr>
			<tr><td>Agencia</td><td>agencia</td></tr>
			<tr><td>Atas</td><td>atas</td></tr>
			<tr><td>Contraseñas</td><td>pwd</td></tr>
			<tr><td>Equipos</td><td>equipos</td></tr>
			<tr><td>Impresoras</td><td>impresoras</td></tr>
		</table>
	</div>
</body>
	<script>
		
		Drag.init(document.getElementById("divcalendario"));
		
		function date(){
			var date = document.getElementById("date").value;
			var d = date.split("-");
			
			var ano = d[0];
			var mes = d[1];
			
			document.getElementById("calendario").src = "../Calendario/calendario.php?ano="+ano+"&mes="+mes;
		}
	</script>
</html>