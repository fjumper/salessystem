<?php
// include database configuration file
include 'conexion.php';

// initializ shopping cart class
include 'La-carta.php';

$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM empleados WHERE IdEmpleado = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Confirmar compra</title>
    <link href="css/css.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

        
            <h4>COMPRAR</h4>
            <div id="banner3">

              
                    <div class="shipAddr" >
        <h4 style="text-align:right;">Empleado: <?php echo $custRow['Nombre']; ?> <?php echo $custRow['ApellidoM']; ?></h4>
        

       
    </div>
                    <table id="tabla">
                        <tr>
                           <th>Pedido</th>
            <th>Tienda</th>
            <th>Cantidad</th>
            <th>Sub total</th>
                        </tr>
      <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
           <td><?php echo $item["IdPedidoCompra"]; ?></td>
            <td><?php echo ''.$item["FkTiendaDestino"].''; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'S/.'.$item["subtotal"].' SOLES'; ?></td>

        </tr>

        <?php } }else{ ?>
        <tr><td colspan="4"><p>NO HAY PEDIDOS </p></td>
        <?php } ?>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'S/.'.$cart->total().' SOLES'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
</table>

   

                

            </div>

            <div id="bannercompras">
                <div id="metodogeneral">
                 
                    <div id="metodo">
                        <p3>Tipo de pago</p3>
                      
       
<form action="AccionCarta.php?action=placeOrder" method="POST">

             <select name="FkTipoPago" id="FkTipoPago">
                           <?php
     
        $query = $db->query("CALL listatipopago");

            while($row = $query->fetch_assoc()):;?>

                <option value = " <?php echo $row['IdTipoPago']; ?> "><?php echo $row['TipoPago']; ?></option>
                 <?php endwhile;?>
                </select>

                    </div>

                     <div id="metodo">
                        <p3>Comprobante:</p3>
                        <input type="text" value="1452" >

                    </div>
                    
                    
                   
                    
                    

            

                    <div id="metodo">
                        <p3>Fechas de pago</p3><br/>
                        <input id="date" type="date">
                        <input type="button" value="+" id="btnm" onclick="msg()"><br/>
                        <p4>1ra Cuota</p4>    <p4>01/01/2019</p4> <input type="text" id="textcuota" value="240" placeholder=""><input type="button" value="Calcular" id="btnm" onclick="msg()"><br />
                        <p4>2da Cuota</p4><p4>01/02/2019</p4><input type="text" id="textcuota" value="240" placeholder=""><br />
                        <p4>3ra Cuota</p4><p4>01/03/2019</p4><input type="text" id="textcuota" value="240" placeholder=""><br />

                    </div>
  <div id="montototal">
                        <p3>Monto total de la compra:<br/> 
                        <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong><?php echo 'S/.'.$cart->total().' SOLES'; ?></strong></td>
            <?php } ?></p3>

                    </div>

 <div class="footBtn">
    <input type="submit" value="GENERAR ORDEN" id="btne" onclick=""> </i><br/><br/>
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> ATRAS</a>
        
    </div>
 </form>
                </div>

            </div>

</form>
      
<section><p>INTERFACE 5</p>
    <p>Requerimiento 1: Las compras las efectua el area
        de compras</p>
             <p>Requerimiento 5: Se genera la orden de compra</p>
    </section>

        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>