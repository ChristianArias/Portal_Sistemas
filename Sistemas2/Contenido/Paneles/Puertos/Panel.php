<?php 

	include("../../../conexion.php");

	$id = $_GET["id"];
	$sql = "SELECT * FROM paneles WHERE id = $id";
	$resUsuario = mysql_query($sql,$conex) or die (mysql_error());
	$row = mysql_fetch_array($resUsuario);

	$puertos = $row["puertos"];
	$brincos = $row["brincos"];

	$res = $puertos/$brincos;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script src="../../../JS/jquery-latest.js"></script>
</head>
	<!--<LINK href="../../../CSS/contenido.css" rel="stylesheet" type="text/css">-->
	<LINK href="../../../CSS/modal_userpic.css" rel="stylesheet" type="text/css">
	<LINK href="../../../CSS/General.css" rel="stylesheet" type="text/css">
	<style>
		#datos{
			position: absolute;
			top: 40%;
			left: 0%;
		}		
		#datos td{
			text-align: center;
			font-size: 10px;
		}
		button{
			white-space: normal;
			width: 50px;
			height: 50px;
			font-size: 10px;
			margin: 0;
		}
		button:hover{
			background: darkgrey;
		}
		@media screen and (max-width:1200px){
			button{
				white-space: normal;
				width: 30px;
				height: 50px;
				font-size: 10px;
				margin: 0;
			}
		}
	</style>
<body>
	<caption id="botones" style="text-align: right" class="elemento">
		<a href="../Panel.php">Regresar</a>
		<a href="#" onClick="javascript:window.location.reload();">Actualizar</a>
	</caption>
	
	<br><br>
	
	<center>
		
		<br><br>
		
	<div id="feedback">
		
		<table width="100%" border="1px" class="elemento">
			<tr class="elemento"><th><?php echo $row["nombre"];?></th></tr>
			<tr>
				<td align="center"><?php echo $puertos." puertos, ".$row["_area"]."/".$row["_agencia"];?></td>
			</tr>
		</table>
		
		<div id="informacion" class="fixedHeaderTable elemento">
			<table id="datos" width="100%" border="1px">
				<?php
					$cont = 1;
					for($col = 0;$col < $brincos;$col++){
						echo "<tr>";
						for($i = 0;$i<$res;$i++){
							$con = "SELECT * FROM _paneles_valores WHERE idPanel = $id AND idPuerto = $cont";
							$resUsuario = mysql_query($con,$conex) or die (mysql_error());
							$row = mysql_fetch_array($resUsuario);
							/*echo 
								"<td>
									<button onClick='alerta(".$row["id"].")' title='".$row["valor"]."'>"
										.$row["valor"].
									"</button>
								</td>";*/
							echo "<td>".$cont."<button onClick='alerta(".$id.",".$cont.")'>".$row["valor"]."</button></td>";
							$cont++;
						}
						echo "</tr>";
					}
				
				?>
			</table>
		</div>
		
	</div>
		
		
	</center>
	
	<div id="openModal" class="modalDialog">
		<div class="elemento">
			<a href="#close" title="Close" class="close">X</a>
			<iframe id="ventana" width="100%" height="100%" src="" class="ventana">
			
			</iframe>
		</div>
	</div>
	
</body>
	<script>
		
		function alerta(id,cont){
			location.href = "#openModal";
			document.getElementById("ventana").src = "Editar.php?id="+id+"&cont="+cont;
		}
		
		$(document).ready(function () {
			setInterval(function () {
				$("#feedback").load();
			}, 1000);
		});
		
	</script>
</html>