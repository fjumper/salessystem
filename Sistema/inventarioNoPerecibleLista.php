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
		<label class="lbl_titulo">Lista de Productos No Perecibles</label><br/><br/>
		<table class="tbl_filtro">
			<tr><td><label class="lbl_etiqueta" for="cmb_estado">Categoria de Productos</label></td>
				<td><label class="lbl_etiqueta" for="cmb_proveedor">Producto</label></td></tr>
			<tr><td>
				<select class="cmb_lista" id="cmb_estado">
					<option>Todos</option>
					<option>Categoria1</option>
					<option>Categoria2</option>
					<option>Categoria3</option>
					<option>Categoria4</option>
				</select>
			</td><td>
				<input class="txt_campos" style="width:250px;" type="text" placeholder="Codigo de barras o nombre del producto"></td></tr>
		</table><br/>
		<div class="div_scroll">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Barras</th><th>Descripcion Producto</th><th class="th_fecha">FechaIngreso</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">V. Compra</th><th class="th_cantidad">V. Venta</th><th class="th_fecha">Detalle</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">5875695221</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero"><label class="lbl_iRojo">5</label></td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td><td class="td_estado"><a href="inventarioNoPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">5875695221</td><td>Laptop Asus M51</td><td class="td_numero">10/10/2018</td><td class="td_numero"><label class="lbl_iVerde">20</label></td><td class="td_numero">1750.00</td><td class="td_numero">2300.00</td><td class="td_estado"><a href="inventarioNoPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">8756952345</td><td>Laptop HP U585</td><td class="td_numero">10/10/2018</td><td class="td_numero"><label class="lbl_iAmarillo">15</label></td><td class="td_numero">1500.00</td><td class="td_numero">1600.00</td><td class="td_estado"><a href="inventarioNoPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">6856958591</td><td>Televisor LG 45" M54</td><td class="td_numero">12/10/2018</td><td class="td_numero"><label class="lbl_iVerde">30</label></td><td class="td_numero">2505.00</td><td class="td_numero">2600.00</td><td class="td_estado"><a href="inventarioNoPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>
			</tbody>
		</table>
		</div>
	</div>
</div>
</body>
</html>