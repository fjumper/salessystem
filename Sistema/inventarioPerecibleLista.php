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
		<label class="lbl_titulo">Lista de Productos Perecibles</label><br/><br/>
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
				<tr><th class="th_codigo">Cod. Barras</th><th class="th_codigo">Lote</th><th>Descripcion Producto</th><th class="th_cantidad">Cant.</th><th class="th_fecha">Detalle</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">5875695221</td><td class="td_numero">F58556</td><td>Huevos La Calera</td><td class="td_numero"><label class="lbl_iRojo">15</label></td><td class="td_estado"><a href="inventarioPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">5875695225</td><td class="td_numero">F58558</td><td>Pollos San Fernando</td><td class="td_numero"><label class="lbl_iRojo">16</label></td><td class="td_estado"><a href="inventarioPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">5875695228</td><td class="td_numero">F58560</td><td>Conserva A1</td><td class="td_numero"><label class="lbl_iAmarillo">100</label></td><td class="td_estado"><a href="inventarioPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>

				<tr><td class="td_numero">5875695229</td><td class="td_numero">F58566</td><td>Atun A1</td><td class="td_numero"><label class="lbl_iVerde">200</label></td><td class="td_estado"><a href="inventarioPerecibleDetalle"><span class="icon-eye"></span></a></td></tr>
			</tbody>
		</table>
		</div>
	</div>
</div>
</body>
</html>