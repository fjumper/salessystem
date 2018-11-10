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
		<label class="lbl_titulo">Lista de Productos Perecibles</label><a href="inventarioPerecibleLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta">Pollo San Fernando B5</label><br/><br/>
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Barras</th><th class="th_codigo">Lote</th><th>Descripcion Producto</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">V. Compra</th><th class="th_cantidad">V. Venta</th><th class="th_fecha">fVencimiento</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">F58556</td><td>Pollo San Fernandn B5</td><td class="td_numero"><label class="lbl_iRojo">2</label></td><td class="td_numero">15.00</td><td class="td_numero">16.00</td><td class="td_numero"><label class="lbl_iRojo">13/10/2018</label></td></tr>

				<tr><td class="td_numero">5875695221</td><td class="td_numero">F58558</td><td>Pollo San Fernandn B5</td><td class="td_numero"><label class="lbl_iRojo">14</label></td><td class="td_numero">14.90</td><td class="td_numero">15.90</td><td class="td_numero"><label class="lbl_iAmarillo">20/12/2018</label></tr>
			</tbody>
		</table>
		<br/><a href="inventarioValorado">			
		<button class="btn_accion02"><span class="icon-eye" style="color:#FFFFFF;"></span> Ver inventaro valorado</button></a><br/><br/>
		<p style="text-align: right;">(T)Mostrar el detalle del producto perecible para su valorizacion</p>
	</div>
</div>
</body>
</html>