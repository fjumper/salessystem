<?php $estado='%'; $tienda='%'; $idTienda='2';$i='0';
if (@$_REQUEST['cmb_estado']){ 
    $_SESSION['estado2']= @$_REQUEST['cmb_estado'];
    $esta2=$_SESSION['estado2'];
    $estado=$esta2;
}
if (@$_REQUEST['cmb_tienda']){ 
    $_SESSION['tienda2']= @$_REQUEST['cmb_tienda'];	
    $tien2=$_SESSION['tienda2'];
    $tienda=$tien2;
}
if (isset($_REQUEST['btn_terminar'])){
	include("CONEXION/abrir_conexiondb.php");
	$totproT = mysqli_query($conexion, "CALL spTotalProductosXTienda('".$idTienda."')");
	include("CONEXION/cerrar_conexiondb.php");
	$tpT = mysqli_fetch_assoc($totproT);
	$i=$tpT['tot'];
	$cont=0;
	for($c=1;$c<=$i;$c++){		
    	$prov=htmlentities($_POST["lbl$c"]);
    	$cantv=htmlentities($_POST["txt_cant$c"]);
    	if($cantv>0){
			include("CONEXION/abrir_conexiondb.php");
			$query1="CALL spDisminuirStock('".$prov."','".$cantv."')";
			$result1=mysqli_query($conexion,$query1);
			include("CONEXION/cerrar_conexiondb.php");
		}
		$cont=$cont+$cantv;
	}
	if($cont>0){
		$tdes=htmlentities($_POST["cmb_tienda"]);
		include("CONEXION/abrir_conexiondb.php");
		$query2="CALL spInsertarGuiaTraslado('3','".$idTienda."','".$tdes."','1')";
		$result2=mysqli_query($conexion,$query2);
		include("CONEXION/cerrar_conexiondb.php");

		include("CONEXION/abrir_conexiondb.php");
		$totGuias = mysqli_query($conexion, "CALL spTotalGuias()");
		include("CONEXION/cerrar_conexiondb.php");
		$tg = mysqli_fetch_assoc($totGuias);
		$guia=$tg['tot'];
		for($c=1;$c<=$i;$c++){
	    	$prov=htmlentities($_POST["lbl$c"]);
	    	$cantv=htmlentities($_POST["txt_cant$c"]);
	    	if($cantv>0){
				include("CONEXION/abrir_conexiondb.php");
				$query3="CALL spInsertarDetalleTraslado('".$prov."','".$cantv."',NULL,'".$guia."')";
				$result3=mysqli_query($conexion,$query3);
				include("CONEXION/cerrar_conexiondb.php");
			}
		}
		echo "<script type='text/javascript'>
			location.href='guiaRemisionLista.php';
			window.open('Reportes/ReporteGuiaRemisionNueva.php','_blank');
		</script>";
	}
	else{
		echo "<script type='text/javascript'>
			alert('Debe de ingresar por lo menos una cantidad de traslado');
		</script>";
	}
}
?>
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
		<label class="lbl_titulo">Nueva Guia de Remision Traslado</label><a href="guiaRemisionLista">
		<button class="btn_accion01"><span class="icon-arrow-left2"></span> Volver</button></a><br/><br/>
		<form method="POST">
		<table class="tbl_filtro" style="width: 60%;">
			<tr><td><label class="lbl_etiqueta" for="cmb_destino">Tienda de Destino</label></td>
				<td><label class="lbl_etiqueta" for="cmb_motivo">Categoria Producto</label></td></tr>
			<tr>
			<td><select  class="cmb_lista" id="cmb_tienda" name="cmb_tienda"  onchange="this.form.submit()">
			<?php include("CONEXION/abrir_conexiondb.php");
				$listaTiendas = mysqli_query($conexion, "CALL spListarTiendas('$idTienda')");
				include("CONEXION/cerrar_conexiondb.php");
				while ($tiendas = mysqli_fetch_assoc($listaTiendas)){ 
					if($tienda== $tiendas['id']){?>
					<option selected value="<?php echo $tiendas['id'];?>"><?php echo $tiendas['nom'];?></option>
					<?php }else{ ?>
					<option value="<?php echo $tiendas['id'];?>"><?php echo $tiendas['nom'];?></option>
		<?php }} ?>
		</select></td><td>
		<select class="cmb_lista" id="cmb_motivo">
			<option>Todos</option>
			<option>Avicola</option>
		</select></td></tr>
		</table><br/>
		<div class="div_scroll">
			<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">Cod. Producto</th><th>Descripcion Produc.</th><th class="th_cantidad">Stock.</th><th class="th_cantidad">Cant. a enviar</th></tr>
			</thead>
			<tbody>				
				<?php include("CONEXION/abrir_conexiondb.php");
				$proXTienda = mysqli_query($conexion, "CALL spListarStockXTienda('$idTienda')");
				include("CONEXION/cerrar_conexiondb.php");
				$i=1;
				while ($pxt = mysqli_fetch_assoc($proXTienda)) {$co=$i%2;?>
				<tr class="tr_color<?php echo $co;?>"><td class="td_numero"><input hidden name="lbl<?php echo $pxt['idv'];?>" value="<?php echo $pxt['idv'];?>">P00<?php echo $pxt['idp'];?></td>
					<td class="td_otros"><?php echo $pxt['idv'];?>|<?php echo $pxt['cod'];?> - <?php echo $pxt['nom'];?></td>
					<td class="td_numero"><?php echo $pxt['sto'];?></td>
				<td class="td_numero"><input class="txt_campos" type="number" min="0" max="<?php echo $pxt['sto'];?>"name="txt_cant<?php echo $pxt['idv'];?>" value="0" style="width: 70px;"></td></tr>
			<?php $i++; } ?>
				<tr><td class="td_fin" colspan="6">*No hay mas datos*</td></tr>
			</tbody>
		</table>
		</div>
		<br/>
		<button class="btn_accion02" name="btn_terminar"><span class="icon-save"></span> Terminar</button>
	</form>
	</div>
</div>
</body>
</html>