<?php $usuario="usuInventarioTienda1"; ?>
<div class="div_cabecera">
	<table class="tbl_cabecera">
		<tr><td class="td_cabModulo">
			<span id="icono_menu" class="icon-menu icon_blanco icon_pointer"></span>
			<label class="lbl_modulo">Inventario</label>
		</td>
		<td class="td_cabUsuario">
			<label class="lbl_usuario"><?php echo $usuario; ?></label>
			<span class="icon-chevron-down icon_blanco icon_pointer"></span>
		</td></tr>
	</table>
</div>
<div id="div_navegacion" class="div_navegacionN">
	<a href="ordenCompraLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Lista Orden de Compra</label><span class="icon-cart icon_Enlace"></span>
	</div></a>
	<a href="trasladosLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Traslados</label><span class="icon-truck icon_Enlace"></span>
	</div></a>
	<a href="guiaRemisionLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Guia de Remision Traslado</label><span class="icon-briefcase icon_Enlace"></span>
	</div></a>
	<a href="mermaDesmedroLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Merma y Desmedro</label><span class="icon-fire icon_Enlace"></span>
	</div></a>
	<a href="inventarioPerecibleLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Inventario Perecible</label><span class="icon-archive icon_Enlace"></span>
	</div></a>
	<a href="inventarioNoPerecibleLista.php" class="a_enlace"><div class="div_enlace">
		<label class="lbl_enlace">Inventario no Perecible</label><span class="icon-box icon_Enlace"></span>
	</div></a>
</div>