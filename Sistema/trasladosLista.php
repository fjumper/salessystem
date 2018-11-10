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
		<label class="lbl_titulo">Lista de Traslados</label><br/><br/>
		<table class="tbl_filtro">
			<tr><td><label class="lbl_etiqueta" for="cmb_estado">Estado</label></td>
				<td><label class="lbl_etiqueta" for="cmb_proveedor">Tienda</label></td>
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
					<option>Tienda2</option>
					<option>Tienda3</option>
					<option>Tienda4</option>
					<option>Tienda5</option>
				</select></td>
			<td><input class="txt_campos" type="text" id="txt_producto" placeholder="Buscar por Producto"></td></tr>
		</table><br/>
		<div class="div_scroll">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Guia Remision</th><th>Producto</th><th>Cant.</th><th>Tienda</th><th class="th_fecha">Fecha Esti</th><th class="th_fecha">Fecha Regis.</th><th>Estado</th><th class="th_registrar">Regis.</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">T1024</td><td>Huevos</td><td class="td_numero">100</td><td>Tienda2</td><td class="td_numero">05/10/2018</td><td class="td_numero">05/10/2018</td><td class="td_estado"><label class="lbl_infoVerde">Reci</label></td><td class="td_estado"></td></tr>

				<tr><td class="td_numero">T1029</td><td>Pollos</td><td class="td_numero">100</td><td>Tienda2</td><td class="td_numero">05/10/2018</td><td class="td_numero">05/10/2018</td><td class="td_estado"><label class="lbl_infoVerde">Reci</label></td><td class="td_estado"></td></tr>

				<tr><td class="td_numero">T1033</td><td>Gaseosa Inka Kola</td><td class="td_numero">50</td><td>Tienda3</td><td class="td_numero">10/10/2018</td><td class="td_numero">10/10/2018</td><td class="td_estado"><label class="lbl_infoNaranja">PaRe</label></td><td class="td_estado"><a href="trasladosRegistroLlegada"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">T1036</td><td>Gaseosa Coca Cola</td><td class="td_numero">50</td><td>Tienda4</td><td class="td_numero">10/10/2018</td><td class="td_numero">10/10/2018</td><td class="td_estado"><label class="lbl_infoRojo">Rech</label></td><td class="td_estado"><a href="trasladosRegistroLlegada"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">T1040</td><td>Vino</td><td class="td_numero">50</td><td>Tienda5</td><td class="td_numero">14/10/2018</td><td class="td_numero"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td><td class="td_estado"><a href="trasladosRegistroLlegada"><span class="icon-pen"></span></a></td></tr>

				<tr><td class="td_numero">T1042</td><td>Platos Porcelana</td><td class="td_numero">150</td><td>Tienda5</td><td class="td_numero">17/10/2018</td><td class="td_numero"></td><td class="td_estado"><label class="lbl_infoAmarillo">XRec</label></td><td class="td_estado"><a href="trasladosRegistroLlegada"><span class="icon-pen"></span></a></td></tr>
			</tbody>
		</table>
		</div>
		<p style="text-align: right;">*Mostrar la lista de traslados que llegaran a la tienda</p>
	</div>
</div>
</body>
</html>