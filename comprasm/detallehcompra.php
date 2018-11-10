
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
                        <a href="recomendaciones.php">ACERCA DE</a>
                    </li>

                </ul>
            </nav>
            <div style="clear:both;"></div>
        </header>

        <section>
            <h4>DETALLE DE COMPRA (CONSOLIDADO POR PRODUCTO)</h4>
      

            <div id="bannereditardc">
               
                    
                    
 <div id="detallecompra">

    <table id="tabla">
                        <tr>
                       <th style="width:30%;">PRODUCTO</th>
                            <th>TIENDAS</th>
                            <th>CANTIDAD POR TIENDA</th>
                            <th>PROVEEDOR POR TIENDA</th>
                            
                        </tr>
      <?php
     
   include 'conexion.php';
   $productID = $_GET['IdCompras'];
   $sql = $db->query("SELECT pr.Descripcion, 
group_concat(Direccion) as tienda,
group_concat(RazonSocial) as proveedor,
group_concat(dc.Cantidad) as cantidades
  from detalle_compras dc INNER JOIN productos pr on dc.FkProducto = pr.IdProducto INNER JOIN tiendas ti on dc.FkTienda = ti.IdTienda
  INNER JOIN proveedores pro on dc.FkProveedor = pro.IdProveedor
  where FkCompra='$productID'
  GROUP BY FkProducto"

);

        
       if($sql->num_rows > 0){ 
            while($row = $sql->fetch_assoc()){
        ?>
 

 <tr>
            <td><?php echo $row["Descripcion"]; ?></td>
            <td><?php echo $row["tienda"]; ?></td>
            <td><?php echo $row["cantidades"]; ?></td>
            <td><?php echo $row["proveedor"]; ?></td>

        
        </tr>

                   <?php } }else{ ?>
        <p>No hay pedidos</p>
        <?php } ?>    
</table>
                    </div>
                    
                     

                    

                  
                    <a href="compras.php"><input type="button" value="ATRAS" id="btnatras" onclick=""></a>
                    <a href="#" ><input type="button" value="IMPRIMIR" id="btnx" onclick=""></a>

            </div>

        </section>
<section><p>INTERFACE 2</p>
            <p>Requerimiento 4:Un personal del area de compras evalua y aprueba la compra, especificando las cantidades a entregar, puede ser al almacen central o una tienda especifica.
        </p>
    </section>


        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>