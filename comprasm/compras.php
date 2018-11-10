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
            <h4>HISTORIAL DE COMPRAS</h4>
            <div id="metodo5">
                <p3>Buscar por:</p3>
                <select>
                    <option>Seleccionar</option>
                    <option>N° de compra</option>
                    <option>Proveedor</option>
                    <option>Producto</option>
                    <option>Tienda</option>
                </select>
                <input type="text" id="texto" placeholder="">
                <input type="button" id="btnbus" value="buscar" placeholder="">
            </div>
            <div id="banner2">

                <div id="contienebanner">
                    <table id="tabla">
                        <tr>
                            <th style="width:30px;"># de Compra</th>
                            <th>Usuario</th>
                            <th>Tipo de Pago</th>
                            <th># Comprobante</th>
                            <th>Total (S/.)</th>
                            <th>Cuotas</th>
                            <th>Estado</th>
                            <th>FechaCompra</th>
                            <th>Opciones</th>
                        </tr>
                       <?php
      $con = new Connection();
          $cmd = $con->getConnection();
        $datos = $cmd->query("CALL mostrardatoscompras");
        $cmd->close();

        if($datos->num_rows > 0){ 
            while($row = $datos->fetch_assoc()){
        ?>
        <tr>
     <td><?php echo $row["IdCompras"]; ?></td>
             <td><?php echo $row["Nombre"]; ?></td>
            <td><?php echo $row["TipoPago"]; ?></td>
            <td><?php echo $row["NumeroComprobante"]; ?></td>
            <td><?php echo $row["Total"]; ?></td>
            <td><?php echo $row["Cuotas"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
            <td><?php echo $row["FechaCompra"]; ?></td>

           <td>
<a href="detallehcompra.php?IdCompras=<?php echo $row["IdCompras"]; ?>"><input type="button" value="Detalle" id="btne" onclick=""></a>
                            </td>
        </tr>

       <?php } }else{ ?>
        <p>No hay pedidos</p>
        <?php } ?>
                    </table>
   
                </div>

            </div>


        </section>
<section><p>INTERFACE 8</p>
            <p>Requerimiento 6:Controla los pagos efectuados a proveedores
        </p>
    </section>


        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>