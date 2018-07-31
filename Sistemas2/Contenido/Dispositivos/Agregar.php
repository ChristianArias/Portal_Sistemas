<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<LINK href="../../CSS/General.css" rel="stylesheet" type="text/css">
	<style>
		.table{
			width: 50%;
			position: absolute;
			top: 20%;
			right: 25%
		}
		input[type="search"]{
			width: 100%;
		}
		select{
			width: 100%;
		}
		textarea{
			width: 99.5%;
			resize: none;
		}
		.left{
			text-align: left;
			width: 30%;
		}
	</style>
</head>

<body>
	<caption id="botones" style="text-align: right">
		<a href="Panel.php">Regresar</a>
		<a href="#" onClick="javascript:window.location.reload();">Actualizar</a>
	</caption>
	
	<center>
		<table class="table">
			<tr><th colspan="2">Nuevo dispositivo</th></tr>
			<tr>
				<th class="left">Nombre del dispositivo</th>
				<td><input type="search" id="nombre"></td>
			</tr>
			<tr><th colspan="2">Comentarios</th></tr>
			<tr>
				<td colspan="2"><textarea id="comentarios" rows="10"></textarea></td>
			</tr>
			<tr><td align="right" colspan="2"><button>Guardar</button></td></tr>
		</table>
	</center>
</body>
</html>