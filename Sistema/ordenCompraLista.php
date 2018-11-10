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
		<label class="lbl_titulo">Lista de Ordenes de Compra</label><br/><br/>
		<table class="tbl_filtro">
			<tr><td><label class="lbl_etiqueta" for="cmb_estado">Estado</label></td>
				<td><label class="lbl_etiqueta" for="cmb_proveedor">Proveedor</label></td>
				<td><label class="lbl_etiqueta" for="txt_producto">Producto</label></td></tr>
			<tr><td>
				<select class="cmb_lista" id="cmb_estado">
					<option>Todos</option>
					<option>Recibido</option>
					<option>Parcialmente Recibido</option>
					<option>Por Recibir</option>
					<option>Rechazado</option>
				</select>
			</td><td>
				<select  class="cmb_lista" id="cmb_proveedor">
					<option>Todos</option>
					<option>Casa Joven</option>
					<option>Coca Cola</option>
					<option>La Calera</option>
					<option>San Fernando</option>
					<option>Viñedo Tacama</option>
				</select></td>
			<td><input class="txt_campos" type="text" id="txt_producto" placeholder="Buscar por Producto"></td></tr>
		</table><br/>
		<div class="div_scroll">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Compra</th><th>Proveedor</th><th class="th_fecha">Fecha Esti</th><th class="th_fecha">Fecha Regis.</th><th>Estado</th><th class="th_registrar">Regis.</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">C1024</td><td>La Calera</td><td class="td_numero">05/10/2018</td><td class="td_numero">05/10/2018</td><td class="td_estado"><label class="lbl_infoVerde">Reci</label></td><td class="td_estado"></td></tr>

				<tr><td class="td_numero">C1027</td><td>San Fernando</td><td class="td_numero">05/10/2018</td><td class="td_numero">05/10/2018</td><td class="td_estado"><label class="lbl_infoVerde">Reci</label></td><td class="td_estado"></td></tr>

				<tr><td class="td_numero">C1028</td><td>Coca Cola</td><td class="td_numero">10/10/2018</td><td class="td_numero">10/10/2018</td><td class="td_estado"><label class="lbl_infoNaranja">PaRe</label></td><td class="td_estado"><a href="ordenCompraRegistro"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">C1029</td><td>Coca Cola</td><td class="td_numero">10/10/2018</td><td class="td_numero">10/10/2018</td><td class="td_estado"><label class="lbl_infoRojo">Rech</label></td><td class="td_estado"><a href="ordenCompraRegistro"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">C1035</td><td>Viñedo Tacama</td><td class="td_numero">14/10/2018</td><td class="td_numero"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td><td class="td_estado"><a href="ordenCompraRegistro"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">C1040</td><td>Casa Joven</td><td class="td_numero">17/10/2018</td><td class="td_numero"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td><td class="td_estado"><a href="ordenCompraRegistro"><span class="icon-pen"></span></a></td></tr>
			</tbody>
		</table></div><br/>
		<p style="text-align: right;">*Mostrar la lista de ordenes de compra que llegaron y llegaran al almacen</p>
	</div>
</div>
</body>
</html>