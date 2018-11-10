<?php  $guia = $_GET['id'];
?><html lang="es">
<head>
    <link href="CSS/estilo.css" rel="stylesheet" />
    <link href="CSS/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Candal|Oxygen+Mono" rel="stylesheet">
</head>
<body>
<?php include 'menu.php';?>
<div id="div_cuerpo" class="div_cuerpoR">
	<div class="div_contenido">
		<label class="lbl_titulo">Detalle Guia de Remision Traslado</label>
		<a href="guiaRemisionLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta">Guia de Remision</label><br/>
		<input type="text" class="txt_campos txt_derecha" id="txt_codigoCompra" disabled value="T000<?php echo $guia;?>"><br/><br/>
		<div class="div_scroll1">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Producto</th><th class="th_codigo">Lote</th><th>Descripcion</th><th class="th_codigo">Serial</th><th class="th_cantidad">Cant.</th></tr>
			</thead>
			<tbody>
				<?php include("CONEXION/abrir_conexiondb.php");
				$guiaDetalle = mysqli_query($conexion, "CALL spListarRemisionDetalle('$guia')");
				include("CONEXION/cerrar_conexiondb.php");
				$i=1;
				while ($guiaD = mysqli_fetch_assoc($guiaDetalle)) {  $co=$i%2;?>
				<tr class="tr_color<?php echo $co;?>">
					<td class="td_numero"><?php echo $guiaD['cob'];?></td>
					<td class="td_numero"><?php echo $guiaD['cod'];?></td>
					<td class="td_otros"><?php echo $guiaD['pro'];?></td>
					<td class="td_numero"><?php echo $guiaD['ser'];?></td>
					<td class="td_numero"><?php echo $guiaD['cant'];?></td>
				</tr>
				<?php $i++;;} ?>
				<tr><td class="td_fin" colspan="6">*No hay mas datos*</td></tr>
			</tbody>
		</table>
	</div><br/>
	<a href="Reportes/ReporteGuiaRemisionDetalle.php?g=<?php echo $guia;?>" target="_blank">
		<button class="btn_accion02"><span class="icon-printer"></span> Imprimir</button></a><br/><br/>
	</div>
</p>
</div>
</body>
</html>