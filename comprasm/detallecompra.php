<?php
include 'La-carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DETALLE DE COMPRA</title>
    <link href="css/css.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Fallo, Intente de nuevo.');
            }
        });
    }
    </script>
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
            <h4>DETALLE DE COMPRA</h4>
            <div id="banner2">

                <div id="contienebanner">
                    <table id="tabla">
                        <tr>
                              <th>NUMERO DE PEDIDO</th>
                              <th>Tienda</th>
                              <th>Cantidad</th>
                              <th>Sub total</th>
                              <th>&nbsp;</th>
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
                            <td>
                                <a href="AccionCarta.php?action=removeCartItem&IdPedidoCompra=<?php echo $item["rowid"]; ?>"><input type="button" value="ELIMINAR" id="btndetalle" onclick="return confirm('Confirma eliminar?')"></a>
                                
                           </td>
                        </tr>
                        <?php } }else{ ?>
        <tr><td colspan="5"><p>NO HAY PEDIDOS AGREGADOS</p></td>
        <?php } ?>
                      <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'S/.'.$cart->total().' SOLES'; ?></strong></td>
            <td><a href="comprar.php" class="btn btn-success btn-block">Confirmar <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>  

                    </table>

                </div>

            </div>

        </section>
<section></br>
    <p>INTERFACE 3</p>
    <p>Requerimiento 2: Las compras de productos de las diversas tiendas se deben consolidar</p>
</section>


        <footer>
            <h3>(c) UCCI</h3>
        </footer>

    </div>
</body>
</html>