

 <?php
        include 'conexion.php';

        ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="css/css.css" rel="stylesheet" />

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
        <section >
            <h4>PEDIDOS PENDIENTES</h4>
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
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Tienda</th>
                            <th>Total</th>
                            <th>Fecha de Pedido</th>       
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                        
  <?php

          $con = new Connection();
          $cmd = $con->getConnection();
        $datos = $cmd->query("CALL mostrardatospedidos");
        $cmd->close();
      
        if($datos->num_rows > 0){ 
            while($row = $datos->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["IdPedidoCompra"]; ?></td>
            <td><?php echo $row["Producto"]; ?></td>
            <td><?php echo $row["RazonSocial"]; ?></td>
            <td><?php echo $row["Cantidad"]; ?></td>
            <td><?php echo $row["NombreTienda"]; ?></td>
            <td>S/.<?php echo $row["total"]; ?></td>
            <td><?php echo $row["FechaHoraPedido"]; ?></td>
            <td><?php echo $row["FkEstadoPedidoCompra"]; ?></td>

            <td>
                                <a href="detallepedido.php?IdPedidoCompra=<?php echo $row["IdPedidoCompra"]; ?>"><input type="button" value="Detalle" id="btne" onclick=""></a>

                                <a href="AccionCarta.php?action=addToCart&IdPedidoCompra=<?php echo $row["IdPedidoCompra"]; ?>"><input type="button" value="Aprobar" id="btnap" onclick=""></a>

                                <a href="rechazado.php?IdPedidoCompra=<?php echo $row["IdPedidoCompra"]; ?>"><input type="button" value="Rechazar" id="btnx" onclick=""></a>
            
            </td>
        </tr>
<?php } }else{ ?>
        <p>No hay pedidos</p>
        <?php } ?>
</table>


                </div>

            </div>


            <a href="detallecompra.php"><input type="button" class="button" id="btnc" value="Consolidar"></a>
        </section>

</form>

        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>
