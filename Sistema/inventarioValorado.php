<html lang="es">
<head>
    <link href="CSS/estilo.css" rel="stylesheet" />
    <link href="CSS/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Candal|Oxygen+Mono" rel="stylesheet">
</head>
<body onload="window.print()">
<?php include 'menu.php';?>
<div id="div_cuerpo" class="div_cuerpoR">
	<div class="div_contenido">
		<label class="lbl_titulo">Inventario Valorado</label><a href="inventarioPerecibleLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta">Pollos San Fernando B5 - Periodo Septiembre, Octubre</label><br/><br/>
		<table class="tbl_contenido">
			<thead>
				<tr><th></th><th></th><th></th><th colspan="2">Entrada</th><th colspan="2">Salida</th><th colspan="2">Existencias</th>
				<tr><th class="th_fecha">Fecha</th><th>Descripcion Producto</th><th class="th_cantidad">V. Unit.</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">Valor</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">Valor</th><th class="th_cantidad">Cant.</th><th class="th_cantidad">Valor</th></tr>
			</thead>
			<tbody>
				<tr><td class="td_numero">10/09/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">15.50</label></td><td class="td_numero">20</td><td class="td_numero">310.00</td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">20</td><td class="td_numero">310.00</td></tr>

				<tr><td class="td_numero">11/09/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">15.50</label></td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">10</td><td class="td_numero">155.00</td><td class="td_numero">10</td><td class="td_numero">155.00</td></tr>

				<tr><td class="td_numero">12/09/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">15.00</label></td><td class="td_numero">30</td><td class="td_numero">450.00</td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">40</td><td class="td_numero">605.00</td></tr>

				<tr><td class="td_numero">12/09/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">15.50</label></td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">10</td><td class="td_numero">155.00</td><td class="td_numero">30</td><td class="td_numero">400.00</td></tr>


				<tr><td class="td_numero">10/10/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">15.00</label></td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">28</td><td class="td_numero">420.00</td><td class="td_numero">2</td><td class="td_numero">30.00</td></tr>

				<tr><td class="td_numero">11/10/2018</td><td>Pollos San Fernando B5</td><td class="td_numero">14.90</label></td><td class="td_numero">14</td><td class="td_numero">208.60</td><td class="td_numero">-</td><td class="td_numero">-</td><td class="td_numero">16</td><td class="td_numero">238.60</td></tr>
			</tbody>
		</table>
		<br/><a href="#">			
		<button class="btn_accion02"><span class="icon-eye" style="color:#FFFFFF;"></span> Ver inventaro valorado</button></a><br/><br/>
		<p style="text-align: right;">(X)Mostrar el inventario valorado de un producto determinado en un perdiodo</p>
	</div>
</div>
<script type="text/javascript">
	function printHTML() { 
  if (window.print) { 
    window.print();
  }
}
document.addEventListener("DOMContentLoaded", function(event) {
  printHTML(); 
});
</script>
</body>
</html>