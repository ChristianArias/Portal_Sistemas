<?php 

	$id = $_GET["id"];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<LINK href="../../../CSS/General.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<caption id="botones" style="text-align: right">
		<a href="Panel.php">Regresar</a>
		<a href="#" onClick="javascript:window.location.reload();">Actualizar</a>
	</caption>
	
	<table width="100%" border="1px">
		<tr>
			<td>
				<table border="1px">
					<tr><th>Herramientas</th></tr>
					<tr><td><input type="checkbox">Usuarios remoto</td></tr>
					<tr><td><input type="checkbox">Dispositivos</td></tr>
					<tr><td><input type="checkbox">Perifericos</td></tr>
					<tr><td><input type="checkbox">Antivirus</td></tr>
					<tr><td><input type="checkbox">Paqueterias</td></tr>
					<tr><td><input type="checkbox">Areas</td></tr>
					<tr><td><input type="checkbox">Usuario</td></tr>
					<tr><td><input type="checkbox">Agencias</td></tr>
					<tr><td><input type="checkbox">Contraseñas</td></tr>
					<tr><td><input type="checkbox">Contactos</td></tr>
					<tr><td><input type="checkbox">Errores y/o Soluciones</td></tr>
					<tr><td><input type="checkbox">Tareas</td></tr>
				</table>
			</td>
			<td>
				<table border="1px">
					<tr><th>Ticket's</th></tr>
					<tr><td><input type="checkbox">Panel de Ticket's</td></tr>
					<tr><td><input type="checkbox">Nuevo</td></tr>
					<tr><th>Relacion de Ip's</th></tr>
					<tr><td><input type="checkbox">Relacion de Ip's</td></tr>
				</table>
			</td>
			<td>
				<table border="1px">
					<tr><th>Equipos</th></tr>
					<tr><td><input type="checkbox">Panel de equipos</td></tr>
					<tr><td><input type="checkbox">Dispositivos</td></tr>
					<tr><td><input type="checkbox">Perifericos</td></tr>
					<tr><td><input type="checkbox">Antivirus</td></tr>
					<tr><td><input type="checkbox">Paqueterias</td></tr>
					<tr><td><input type="checkbox">Areas</td></tr>
					<tr><td><input type="checkbox">Usuario</td></tr>
					<tr><td><input type="checkbox">Agencias</td></tr>
					<tr><td><input type="checkbox">Contraseñas</td></tr>
					<tr><td><input type="checkbox">Contactos</td></tr>
					<tr><td><input type="checkbox">Errores y/o Soluciones</td></tr>
					<tr><td><input type="checkbox">Tareas</td></tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>