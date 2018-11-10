<?php 
 include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="css/css.css" rel="stylesheet" />
    <meta charset="utf-8" />
</head>
<body>
    <div id="contenedor">
        <header>
            <div id="titulo">
                <div id="logo">
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
                        <a href="#">ACERCA DE</a>
                    </li>

                </ul>
            </nav>
            <div style="clear:both;"></div>
        </header>

        <section>
            <h4>HISTORIAL DE PEDIDOS</h4>
            <div id="metodo5">
                <p3>Buscar por:</p3>
                <select>
                    <option>Seleccionar</option>
                    <option>Todos</option>
                    <option>Aprobados</option>
                    <option>Rechazados</option>
                    <option>Pendientes</option>
                </select>
                <input type="text" id="texto" placeholder="">
                <input type="button" id="btnbus" value="buscar" placeholder="">

            </div>
            <div id="banner4">

                <div id="contienebanner">
                    <table id="tabla">
                        <tr>
                       <th style="width:30px;"># de pedido</th>
                            <th>Producto</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Tienda</th>
                            <th>Fecha de Pedido</th>       
                            <th>Estado</th>
                            <th>OPCIONES</th>

                        </tr>
                        
                       <?php
     
        $query = $db->query("CALL mostrarhistorialpedidos");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["IdPedidoCompra"]; ?></td>
            <td><?php echo $row["Producto"]; ?></td>
            <td><?php echo $row["RazonSocial"]; ?></td>
            <td><?php echo $row["Cantidad"]; ?></td>
            <td><?php echo $row["NombreTienda"]; ?></td>
            <td><?php echo $row["FechaHoraPedido"]; ?></td>
            <td><?php echo $row["FkEstadoPedidoCompra"]; ?></td>

            <td>
                                <a href="detallehistorialpedido.php?IdPedidoCompra=<?php echo $row["IdPedidoCompra"]; ?>"><input type="button" value="Detalle" id="btne" onclick=""></a>
            
            </td>
        </tr>
        <?php } }else{ ?>
        <p>No hay pedidos</p>
        <?php } ?>
                    </table>

                </div>

            </div>


            
        </section>

<section><p>INTERFACE 7</p>
     <p>Requerimiento 8: Visualizar estado de pedidos</p>

        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>
