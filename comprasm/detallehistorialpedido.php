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
            <h4>DETALLE DE PEDIDO</h4>
      

            <div id="bannereditar">
                <div id="metodogeneral">
                    
                    
 <div id="montototal">
      <?php
     
   include 'conexion.php';
   $productID = $_GET['IdPedidoCompra'];
   $sql = $db->query("SELECT ti.Direccion,pro.Producto,pr.PrecioCompra,pr.Observacion FROM pedidos_compra pr inner join tiendas ti
  on pr.FkTiendaDestino=ti.IdTienda inner join productos pro
  on pr.FkProducto=pro.IdProducto where IdPedidoCompra = ".$productID);

        
       if($sql->num_rows > 0){ 
            while($row = $sql->fetch_assoc()){
        ?>
 
                        <p3>Direccion de tienda:</p3>
                        <p4><?php echo $row["Direccion"]; ?></p4><br/><br/>
                        <p3>Producto:</p3>
                        <p4><?php echo $row["Producto"]; ?></p4><br/><br/>
                        <p3>Precio de compra:</p3>
                        <p4><?php echo $row["PrecioCompra"]; ?> SOLES</p4><br/><br/>
                          <p3>Observacion:</p3>
                        <p4><?php echo $row["Observacion"]; ?></p4>

                   <?php } }else{ ?>
        <p>No hay pedidos</p>
        <?php } ?>    

                    </div>
                    
                     

                    

                  
                    <a href="estado.php"><input type="button" value="ATRAS" id="btng" onclick=""></a>

                </div>
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