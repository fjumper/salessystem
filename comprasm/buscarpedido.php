<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$idprod=$_POST['idprod'];
	$sql="SELECT idpedidocompras,
        pr.nombre,
      Cantidad,
           idtienda,
           FecPedido from pedidos_compras pc
  inner join productos pr
  on pc.idproducto=pr.idproducto where pr.nombre='$idprod'";
   $result=mysqli_query($conexion,$sql);
    if (empty($idprod)){
	  include("index.php");
  }

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="css/css.css" rel="stylesheet" />
    <script src="js/js.js"></script>
	<meta charset="utf-8" />
</head>
<body>
    <div id="contenedor">
        <header>
            <div id="titulo">
                <div id="logo" >
                </div>
                <div id="fondo1">
                    <h1>COMPRAS</h1>
                    <h2></h2>
                </div>
            </div>
            <div style="clear:both;"></div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">PEDIDOS</a>
                    </li>
                    <li>
                        <a href="estado.php">ESTADO DE PEDIDOS</a>
                    </li>
                    <li>
                        <a href="compras.php">COMPRAS</a>
                    </li>
                    <li>
                        <a href="recomendaciones.html">Recomendaciones</a>
                    </li>

                </ul>
            </nav>
            <div style="clear:both;"></div>
        </header>
        <form action="buscarpedido.php" method="POST">
        <section>
            <h4>PEDIDOS</h4>
            <div id="metodo5">
                <p3>Buscar por:</p3>
                <select>
                    <option>Seleccionar</option>
                    <option>Codigo</option>
                    <option>Proveedor</option>
                    <option>Producto</option>
                    <option>Tienda</option>
                </select>
                <input type="text" id="idprod" name="idprod" placeholder="PRODUCTO">
                <input type="submit" id="btnbuscar" value="buscar" placeholder="">
            </div>
            <div id="banner">

                <div id="contienebanner">
                    <table id="tabla">
                        <tr>
                            <th style="width:30px;"># de pedido</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Tienda</th>
                            <th>FechPedido</th>
                            <th>Opciones</th>
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
            <td>
                                <a href="editar.html"><input type="button" value="Detalle" id="btne" onclick="msg()"></a>
                                <input type="button" value="Aprobar" id="btnap" onclick="setdata('btnap')">
                                <input type="button" value="X" id="btnx" onclick="cancelarp('btnap')">
            
            </td>
        </tr>

        <?php 
            endwhile;
         ?>
</table>


                </div>

            </div>


            <a href="consolidado.html"><input type="button" class="button" id="btnc" value="Consolidar"></a>
        </section>

</form>

        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>



