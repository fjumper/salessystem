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
		<label class="lbl_titulo">Registrare Merma y Desmedro</label><a href="mermaDesmedroLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<label class="lbl_etiqueta" for="txt_producto">Producto</label><br/>
		<input class="txt_campos" type="text" id="txt_producto" placeholder="Codigo Barras de producto"><br/><br/>
		<label class="lbl_etiqueta" for="txt_cantidad">Cantidad</label><br/>
		<input class="txt_campos" type="number" id="txt_cantidad" value="1" min="1"><br/><br/>
		<label class="lbl_etiqueta" for="dtp_fechaDeteccion">Fecha de Deteccion</label><br/>
		<input class="txt_campos" type="date" id="dtp_fechaDeteccion"><br/><br/>
		<label class="lbl_etiqueta" for="cmb_tipo">Tipo</label><br/>
		<select class="cmb_lista" id="cmb_tipo">
			<option>Merma</option>
			<option>Desmedro</option>
		</select><br/><br/>
		<label class="lbl_etiqueta" for="cmb_razon">Razon</label><br/>
		<select class="cmb_lista" id="cmb_razon">
			<option>Razon01</option>
			<option>Razon02</option>
			<option>Razon03</option>
		</select><br/><br/>
		<label class="lbl_etiqueta" for="txt_obeservacion">Observacion</label><br/>
		<textarea id="txt_obeservacion" style=" width: 338px; height: 86px;"></textarea>
		<br/>
		<br/><a href="mermaDesmedroLista">			
		<button class="btn_accion02"><span class="icon-save"></span> Guardar</button></a><br/><br/>
		<p style="text-align: right;">*Registrar la deteccion de una merma o desmedro para continuar con su proceso</p>
	</div>
</div>
</body>
</html>