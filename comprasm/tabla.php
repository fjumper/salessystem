

<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$sql="CALL mostrardatos1";
	$result=mysqli_query($conexion,$sql);
 ?>


<table id="example" class="table table-sm table-inverse table-bordered">
		<tr style="font-weight: bold" >
			<td>Id</td>
			<td>Consolidado</td>
			<td>TipoCompra</td>
			<td>Empleado</td>
			<td>Fecha Compra</td>
			<td>Numero Cuenta</td>
			<td>Cuotas</td>
			<td>Estado</td>

			<td style="text-align: center;">Editar</td>
			<td style="text-align: center;">Eliminar</td>
		</tr>
	<?php 

		while ($ver=mysqli_fetch_row($result)):
	 ?>
		<tr>
			<td><?php echo $ver[0]; ?></td>
			<td><?php echo $ver[1]; ?></td>
			<td><?php echo $ver[2]; ?></td>
			<td><?php echo $ver[3]; ?></td>
			<td><?php echo $ver[4]; ?></td>
			<td><?php echo $ver[5]; ?></td>
			<td><?php echo $ver[6]; ?></td>
			<td><?php echo $ver[7]; ?></td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-warning btn-xs" 
				onclick="obtenDatos('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#updatemodal">
					<span class="fa fa-pencil-square-o"></span> Editar
				</span>
			</td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-danger btn-xs" 
					onclick="elimina('<?php echo $ver[0]; ?>')">
					<span class="fa fa-trash"></span> Eliminar
				</span>
			</td>
		</tr>

		<?php 
			endwhile;
		 ?>
</table>

