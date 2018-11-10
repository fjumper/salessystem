   <?php
    header("Location: index.php");
   include 'conexion.php';
   $productID = $_GET['IdPedidoCompra'];
        $sql = $db->query("UPDATE pedidos_compra SET FkEstadoPedidoCompra='RECHAZADO' WHERE IdPedidoCompra = ".$productID);
mysqli_query($db,$sql)

         ?>