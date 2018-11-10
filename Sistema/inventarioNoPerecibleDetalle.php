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
		<label class="lbl_titulo">Detalle de Producto no Perecible</label><a href="inventarioNoPerecibleLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta">Descripcion Producto</label><br/>
		<input type="text" class="txt_campos" id="txt_codigoCompra" disabled value="Laptop Asus M51"><br/>
		<div class="div_scroll">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Barras</th><th class="th_codigo">Serial</th><th>Descripcion Producto</th><th class="th_fecha">FechaIngreso</th><th class="th_cantidad">V. Compra</th><th class="th_cantidad">V. Venta</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">FJ552458256</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td></tr>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">FJ552458257</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td></tr>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">FJ552458258</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td></tr>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">FJ552458259</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td></tr>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">FJ552458260</td><td>Laptop Asus M51</td><td class="td_numero">10/09/2018</td><td class="td_numero">1850.00</td><td class="td_numero">2500.00</td></tr>
			</tbody>
		</table>
		</div>
		<br/><a href="inventarioValorado">			
		<button class="btn_accion02"><span class="icon-eye" style="color:#FFFFFF;"></span> Ver inventaro valorado</button></a><br/><br/>
		<p style="text-align: right;">(W)Mostrar el detalle del producto no perecible para su valorizacion</p>
	</div>
</div>
</body>
</html>