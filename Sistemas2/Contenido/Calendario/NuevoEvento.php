<?php

	$day = $_GET["dia"];
	$month = $_GET["mes"];
	$ano = $_GET["ano"];

	$mes = strlen($month)==1 ? "0".$month : $month;
	$dia = strlen($day)==1 ? "0".$day : $day;

	$fecha = $ano."-".$mes."-".$dia;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<LINK href="../../CSS/General.css" rel="stylesheet" type="text/css">
	<style>
		#contenido{
			width: 95%;
			position: absolute;
			bottom: 5%;
			left: 3%;
		}
		input[type="search"],input[type="date"],#compartircon{
			width: 100%;
		}
		
		#compartido{
			width: 100%;
			border: 1px solid black;
			min-height: 10vh;
			max-height: 10vh;
		}
		#comentarios{
			width: 100%;
			resize: none;
		}
	</style>
</head>

<body>
	<caption id="botones" style="text-align: right" class="elemento">
		<a href="dia.php?mes=<?php echo $month;?>&ano=<?php echo $ano;?>&dia=<?php echo $dia;?>">Regresar</a>
		<a href="calendario.php?mes=<?php echo $month;?>&ano=<?php echo $ano;?>">Calendario</a>
		<a href="#" onClick="javascript:window.location.reload();">Actualizar</a>
	</caption>
	
	<table id="contenido">
		<caption>Nuevo evento <?php echo $fecha;?></caption>
		<tr>
			<td colspan="4"><input type="search" id="titulo" placeholder="Titulo"></td>
		</tr>
		<tr>
			<td colspan="4"><input type="search" id="ubicacion" placeholder="Ubicacion"></td>
		</tr>
		<tr>
			<td colspan="4" align="right">
				<label for="checkbox_id">Todo el dia</label>
				<input type="checkbox" name="checkbox" id="checkbox_id" onClick="today()">
			</td>
		</tr>
		<tr>
			<td colspan="2" width="50%"></td>
			<td width="15%">Inicio</td>
			<td><input type="date" value="<?php echo $fecha?>" min="<?php echo $fecha?>" id="inicio"></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>Fin</td>
			<td><input type="date" value="<?php echo $fecha?>" min="<?php echo $fecha?>" id="fin"></td>
		</tr>
		<tr>
			<th colspan="4">
				<textarea id="comentarios" placeholder="Comentarios" rows="3"></textarea>
			</th>
		</tr>
		<tr>
			<td colspan="1">Compartir con:</td>
			<td><a href="#">Agregar</a></td>
			<td colspan="2">
				<select id="compartircon">
				
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<div id="compartido"></div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="dia.php?mes=<?php echo $month;?>&ano=<?php echo $ano;?>&dia=<?php echo $dia;?>">Cancelar</a>
			</td>
			<td colspan="2" align="right">
				<a href="#">Agregar</a>
			</td>
		</tr>
	</table>
	
</body>
	<script>
		function today(){
			var today = <?php echo $fecha;?>;
			
			var control = document.getElementById("checkbox_id");
			if(control.checked){
				document.getElementById("inicio").disabled = true;
				document.getElementById("fin").disabled = true;
			}else{
				document.getElementById("inicio").disabled = false;
				document.getElementById("fin").disabled = false;
			}
		}
	</script>
</html>