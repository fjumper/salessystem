<?php $estado='%'; $tienda='%'; $idTienda='2';
if (@$_REQUEST['cmb_estado']){ 
    $_SESSION['estado2']= @$_REQUEST['cmb_estado'];
    $esta2=$_SESSION['estado2'];
    $estado=$esta2;
}
if (@$_REQUEST['cmb_tienda']){ 
    $_SESSION['tienda2']= @$_REQUEST['cmb_tienda'];
    $tien2=$_SESSION['tienda2'];
    $tienda=$tien2;
}?>
<html lang='es'>
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
				<label class="lbl_infoVerde">Entr</label><label class="lbl_informacion">Entregado</label>
			</td>
			<td>
				<label class="lbl_infoNaranja">PaEn</label><label class="lbl_informacion">Parcialmente Entregado</label>
			</td>
			<td>
				<label class="lbl_infoAmarillo">XEnt</label><label class="lbl_informacion">Por Entregar</label>
			</td>
			<td>
				<label class="lbl_infoRojo">Rech</label><label class="lbl_informacion">Rechazado</label>
			</td></tr>
		</table><br/>
		<label class="lbl_titulo">Lista de Guia de Remision Traslado</label><br/><br/>
		<?php $fecha=getdate(); $fecha=($fecha['mday']-1)."-".$fecha['mon']."-".$fecha['year']; ?>
		
		<form name="frmGuiaRemisionLista" method="post" enctype="multipart/form-data">
		<table class="tbl_filtro">
			<tr><td><label class="lbl_etiqueta" for="cmb_estado">Estado</label></td>
				<td><label class="lbl_etiqueta" for="cmb_tienda">Tienda Destino</label></td></tr>
			<tr><td>
				<select class="cmb_lista" id="cmb_estado" name="cmb_estado"  onchange="this.form.submit()">
					<option value="%">Todos</option>
					<?php include("CONEXION/abrir_conexiondb.php");
						$estadosTraslado = mysqli_query($conexion, "CALL spListarEstadosRemision()");
						include("CONEXION/cerrar_conexiondb.php");
						while ($esta = mysqli_fetch_assoc($estadosTraslado)) { 
							if($estado== $esta['id']){?>
							<option selected value="<?php echo $esta['id'];?>"><?php echo $esta['re'];?></option>
							<?php }else{ ?>
							<option value="<?php echo $esta['id'];?>"><?php echo $esta['re'];?></option>
				<?php }} ?>
				</select>
			</td><td>
				<select  class="cmb_lista" id="cmb_tienda" name="cmb_tienda" onchange="this.form.submit()">
					<option value="%">Todas</option>
					<?php include("CONEXION/abrir_conexiondb.php");
						$listaTiendas = mysqli_query($conexion, "CALL spListarTiendas('$idTienda')");
						include("CONEXION/cerrar_conexiondb.php");
						while ($tiendas = mysqli_fetch_assoc($listaTiendas)){ 
							if($tienda== $tiendas['id']){?>
							<option selected value="<?php echo $tiendas['id'];?>"><?php echo $tiendas['nom'];?></option>
							<?php }else{ ?>
							<option value="<?php echo $tiendas['id'];?>"><?php echo $tiendas['nom'];?></option>
				<?php }} ?>
				</select></td></tr>
		</table><br/>
		</form>
		<div class="div_scroll1">
			<table class="tbl_contenido">
				<thead>
					<tr><th class="th_codigo">Guia Remision</th><th class="th_fecha">InicioTraslado</th><th class="th_fecha">FinTraslado</th><th>Tienda Destino</th><th class="th_estado">Estado</th><th class="th_estado">Detalle</th></tr>
				</thead>
				<tbody>
					<?php include("CONEXION/abrir_conexiondb.php");
					$listatraslados = mysqli_query($conexion, "CALL spListarRemisionTraslado('$estado','$tienda','$idTienda')");
					include("CONEXION/cerrar_conexiondb.php");
					$i=1;
					while ($trasla = mysqli_fetch_assoc($listatraslados)) {  $co=$i%2;?>
					<tr class="tr_color<?php echo $co;?>"><td class="td_numero">T00<?php echo $trasla['id'];?></td>
						<td class="td_numero"><?php echo $trasla['ini'];?></td>
						<td class="td_numero"><?php echo $trasla['fin'];?></td>
						<td class="td_otros"><?php echo $trasla['tie'];?></td>
						<td class="td_estado"><?php 
							if($trasla['est']=='1') {$cla='lbl_infoVerde';$lblVal='Entr';}
							elseif($trasla['est']=='2') {$cla='lbl_infoNaranja';$lblVal='PaEn';}
							elseif($trasla['est']=='3') {$cla='lbl_infoAmarillo'; $lblVal='XEnt';}
							elseif($trasla['est']=='4') {$cla='lbl_infoRojo';$lblVal='Rech';}
						?>
						<label class="<?php echo $cla;?>"><?php echo $lblVal;?></label></td><td class="td_estado"><a href="guiaRemisionDetalle.php?id=<?php echo $trasla['id'];?>"><span class="icon-eye"></span></a></td></tr>
				<?php $i++;;} ?>
				<tr><td class="td_fin" colspan="6">*No hay mas datos*</td></tr>
				</tbody>
			</table>
		</div>
		<br/><a href="guiaRemisionNueva">			
		<button class="btn_accion02"><span class="icon-circle-with-plus"></span> Generar Guia de Remision Traslado</button></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Reportes/ReporteGuiaRemisionLista.php?e=<?php echo $estado;?>&t=<?php echo $tienda;?>" target="_blank">
		<button class="btn_accion02"><span class="icon-printer"></span> Imprimir</button></a>
	</div>
</div>
</body>
</html>