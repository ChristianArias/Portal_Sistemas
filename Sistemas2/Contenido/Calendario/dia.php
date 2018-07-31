<?php 
	
	$dia = $_GET["dia"];
	$month = $_GET["mes"];
	$ano = $_GET["ano"];

	$mes = "";
	switch($month){
		case "01":$mes = "Enero";break;
		case "02":$mes = "Febrero";break;
		case "03":$mes = "Marzo";break;
		case "04":$mes = "Abril";break;
		case "05":$mes = "Mayo";break;
		case "06":$mes = "Junio";break;
		case "07":$mes = "Julio";break;
		case "08":$mes = "Agosto";break;
		case "09":$mes = "Septiembre";break;
		case "10":$mes = "Octubre";break;
		case "11":$mes = "Noviembre";break;
		case "12":$mes = "Diciembre";break;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<LINK href="../../CSS/General.css" rel="stylesheet" type="text/css">
	<LINK href="../../CSS/contenido.css" rel="stylesheet" type="text/css">
	<style>
		body{
			background-color: white;
		}	
	</style>
</head>

<body class="elemento">
	<caption id="botones" style="text-align: right" class="elemento">
		<a href="calendario.php?mes=<?php echo $month;?>&ano=<?php echo $ano;?>">Regresar</a>
		<a href="#" onClick="javascript:window.location.reload();">Actualizar</a>
		<div style="float: right">
			<a href="NuevoEvento.php?mes=<?php echo $month;?>&ano=<?php echo $ano;?>&dia=<?php echo $dia;?>">
				Evento nuevo
			</a>
		</div>
	</caption>
	<center>
		
		Eventos del dia <?php echo $dia." de ".$mes." del ".$ano;?>
	
		<table width="100%">
			<thead>
				<th>Hora</th>
				<th>Evento</th>
			</thead>
			<tbody>
			<?php
				for($i = 1;$i<=24;$i++){
					echo "<tr>";
					for($c = 0;$c<2;$c++){
						echo "<td>".$i."</td>";
					}
					echo "</tr>";
				}
			
			?>
			</tbody>
		</table>
	
	</center>
</body>
</html>