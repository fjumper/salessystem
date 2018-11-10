<?php $min='2018-01-01';$fecha=getdate();
if($fecha['mday']<10){$dia='0'.$fecha['mday'];}
else{$dia=$fecha['mday'];}
if($fecha['mon']<10){$mes='0'.$fecha['mon'];}
else{$mes=$fecha['mon'];}
$max=$fecha['year']."-".$mes."-".$dia;
$tipo='%';$razon='%';$desde=$min;$hasta=$max;

if (@$_REQUEST['cmb_tipo']){ 
    $_SESSION['tipo2']= @$_REQUEST['cmb_tipo'];
    $tipo2=$_SESSION['tipo2'];
    $tipo=$tipo2;
}
if (@$_REQUEST['cmb_razon']){ 
    $_SESSION['razon2']= @$_REQUEST['cmb_razon'];
    $razon2=$_SESSION['razon2'];
    $razon=$razon2;
}
if (@$_REQUEST['txt_fechaD']){ 
    $_SESSION['desde2']= @$_REQUEST['txt_fechaD'];
    $desde2=$_SESSION['desde2'];
    $desde=$desde2;
}
if (@$_REQUEST['txt_fechaH']){ 
    $_SESSION['hasta2']= @$_REQUEST['txt_fechaH'];
    $hasta2=$_SESSION['hasta2'];
    $hasta=$hasta2;
}?>
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
				<label class="lbl_infoMorado">Mer</label><label class="lbl_informacion">Merma</label>
			</td>
			<td>
				<label class="lbl_infoMarron">Des</label><label class="lbl_informacion">Desmedro</label>
			</td></tr>
		</table><br/>
		<label class="lbl_titulo">Lista de Merma y Desmedro</label><br/><br/>
		<form name="frmMermaDesmedroLista" method="post" enctype="multipart/form-data">
		<table class="tbl_filtro">
			<tr><td><label class="lbl_etiqueta" for="cmb_estado">Tipo</label></td>
				<td><label class="lbl_etiqueta" for="cmb_proveedor">Razon</label></td>
				<td><label class="lbl_etiqueta" for="txt_fechaD">Desde (F. Registro)</label></td>
				<td><label class="lbl_etiqueta" for="txt_fechaH">Hasta (F. Registro)</label></td></tr>
			<tr><td>
				<select class="cmb_lista" id="cmb_tipo" name="cmb_tipo" onchange="this.form.submit()">
					<option value="%">Ambos</option>
					<?php include("CONEXION/abrir_conexiondb.php");
						$estadosMerma = mysqli_query($conexion, "CALL spListarEstadosMerma()");
						include("CONEXION/cerrar_conexiondb.php");
						while ($merma = mysqli_fetch_assoc($estadosMerma)) { 
							if($tipo== $merma['id']){?>
							<option selected value="<?php echo $merma['id'];?>"><?php echo $merma['nom'];?></option>
							<?php }else{ ?>
							<option value="<?php echo $merma['id'];?>"><?php echo $merma['nom'];?></option>
				<?php }} ?>
				</select>
			</td><td>
				<select  class="cmb_lista" id="cmb_razon" name="cmb_razon" onchange="this.form.submit()">
					<option value="%">Todas</option>
					<?php include("CONEXION/abrir_conexiondb.php");
						$razonMerma = mysqli_query($conexion, "CALL spListarRazonMerma('".$tipo."')");
						include("CONEXION/cerrar_conexiondb.php");
						while ($raz = mysqli_fetch_assoc($razonMerma)) { 
							if($razon== $raz['id']){?>
							<option selected value="<?php echo $raz['id'];?>"><?php echo $raz['nom'];?></option>
							<?php }else{ ?>
							<option value="<?php echo $raz['id'];?>"><?php echo $raz['nom'];?></option>
				<?php }} ?>
				</select></td>
			<td><input class="txt_campos" type="date" name="txt_fechaD" id="txt_fechaD" min="<?php echo $min;?>" max="<?php echo $max;?>" value="<?php echo $desde;?>"  onchange="this.form.submit()"></td>
			<td><input class="txt_campos" type="date" name="txt_fechaH" id="txt_fechaH" min="<?php echo $min;?>" max="<?php echo $max;?>" value="<?php echo $hasta;?>"  onchange="this.form.submit()"></td></tr>
		</table></form><br/>
		<div class="div_scroll1">
		<table class="tbl_contenido">
			<thead>
				<tr><th class="th_codigo">ID</th><th class="th_codigo" style="width: 70px;">Tipo</th><th>Producto</th><th class="th_cantidad">Cant.</th><th>Razon</th><th>Costo</th><th class="th_fecha">Fecha Deteccion</th><th class="th_fecha">Fecha Registro</th></tr>
			</thead>
			<tbody>
				<?php include("CONEXION/abrir_conexiondb.php"); $i=1;
				$mermaLista = mysqli_query($conexion, "CALL spListarMermaDesmedro('".$tipo."','".$razon."','".$desde."','".$hasta."')");
				include("CONEXION/cerrar_conexiondb.php");
				while ($md = mysqli_fetch_assoc($mermaLista)) { $co=$i%2;?>
				<tr class="tr_color<?php echo $co;?>">
					<td class="td_numero">MD000<?php echo $md['idm'];?></td>
					<td class="td_estado"><?php if($md['tip']=='1'){?>
						<label class="lbl_infoMorado">Mer</label>
						<?php } else{?>
						<label class="lbl_infoMarron">Des</label>
						<?php } ?>
					</td>
					<td class="td_otros"><?php echo $md['pro'];?></td>
					<td class="td_numero"><?php echo $md['can'];?></td>
					<td class="td_otros"><?php echo $md['raz'];?></td>
					<td class="td_numero"><?php echo $md['com'];?></td>
					<td class="td_numero"><?php echo $md['feD'];?></td>
					<td class="td_numero"><?php echo $md['feR'];?></td>
				</tr>
			<?php $i++;} ?>
				<tr><td class="td_fin" colspan="8">*No hay mas datos*</td></tr>
			</tbody>
		</table>
		</div>
		<br/><a href="mermaDesmedroregistro">			
		<button class="btn_accion02"><span class="icon-circle-with-plus"></span> Registrar Nuevo</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Reportes/ReporteMermaDesmedroLista.php?t=<?php echo $tipo;?>&r=<?php echo $razon;?>&d=<?php echo $desde;?>&h=<?php echo $hasta;?>" target="_blank">
		<button class="btn_accion02"><span class="icon-printer"></span> Imprimir</button></a>
	</div>
</div>
</body>
</html>