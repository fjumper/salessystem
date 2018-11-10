<html lang="es">
<head>
    <link href="CSS/estilo.css" rel="stylesheet" />
    <link href="CSS/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Candal|Oxygen+Mono" rel="stylesheet">
</head>
<body>
<?php include 'menu.php';?>
<div id="div_cuerpo" class="div_cuerpoR">
	<div class="div_contenido">
		<table class="tbl_informacion">
			<tr><td>
				<label class="lbl_infoVerde">Reci</label><label class="lbl_informacion">Recibido</label>
			</td>
			<td>
				<label class="lbl_infoNaranja">PaRe</label><label class="lbl_informacion">Parcialmente Recibido</label>
			</td>
			<td>
				<label class="lbl_infoAmarillo">XRec</label><label class="lbl_informacion">Por Recibir</label>
			</td>
			<td>
				<label class="lbl_infoRojo">Rech</label><label class="lbl_informacion">Rechazado</label>
			</td></tr>
		</table><br/>
		<label class="lbl_titulo">Recepcion de Orden de Compra</label>
		<a href="ordenCompraLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta">Codigo de Compra</label><br/>
		<input type="text" class="txt_campos" id="txt_codigoCompra" disabled value="C1027"><br/><br/>
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Barras</th><th class="th_cantidad">Cod. Lote</th><th style="width: 40%;">Descripcion</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">Cant. Recep.</th><th>Fecha Venci.</th><th class="th_cantidad">Estado</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">725565885475</td><td class="td_numero"><input autofocus class="txt_campos" type="text" placeholder="Numero Lote"></td><td>Pollos B6</td><td class="td_numero">30</td><td class="td_numero"><input class="txt_campos txt_numero" type="number" value="0" min="0" max="1000"></td><td><input class="txt_campos" type="date"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td></tr>

				<tr><td class="td_numero">725565885474</td><td class="td_numero"><input class="txt_campos" type="text" placeholder="Numero Lote"></td><td>Pollos B5</td><td class="td_numero">30</td><td class="td_numero"><input class="txt_campos txt_numero" type="number" value="0" min="0" max="1000"></td><td><input class="txt_campos" type="date"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td></tr>

				<tr><td class="td_numero">725565885473</td><td class="td_numero"><input class="txt_campos" type="text" placeholder="Numero Lote"></td><td>Pollos B4</td><td class="td_numero">40</td><td class="td_numero"><input class="txt_campos txt_numero" type="number" value="0" min="0" max="1000"></td><td><input class="txt_campos" type="date"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td></tr>
			</tbody>
		</table>
		<br/><a href="ordenCompraLista">
		<button class="btn_accion02"><span class="icon-save"></span> Guardar</button></a><br/><br/>

		<p style="text-align: right;">*Registrar el detalle de la orden de compra recibida</p>
	</div>
</div>
</body>
</html>