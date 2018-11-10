<?php
date_default_timezone_set("America/Lima");
include 'La-carta.php';
$cart = new cart;


include 'conexion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['IdPedidoCompra'])){
        $productID = $_REQUEST['IdPedidoCompra'];
  
        $query = $db->query("SELECT * FROM pedidos_compra WHERE IdPedidoCompra = ".$productID);
        $sql = $db->query("UPDATE pedidos_compra SET FkEstadoPedidoCompra='APROBADO' WHERE IdPedidoCompra = ".$productID);
        
        $row = $query->fetch_assoc();
        $itemData = array(
            'IdPedidoCompra' => $row['IdPedidoCompra'],
            'FkTiendaDestino' => $row['FkTiendaDestino'],
            'FkProducto' => $row['FkProducto'],
            'FkProveedor' => $row['FkProveedor'],
            'PrecioCompra' => $row['PrecioCompra'],
            'qty' => $row['Cantidad'],
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem;
        header("Location: index.php");
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['IdPedidoCompra'])){
        $itemData = array(
            'rowid' => $_REQUEST['IdPedidoCompra'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['IdPedidoCompra'])){
        $deleteItem = $cart->remove($_REQUEST['IdPedidoCompra']);
         $sql = $db->query("UPDATE pedidos_compra SET FkEstadoPedidoCompra='PENDIENTE' WHERE IdPedidoCompra = ".$deleteItem);
        header("Location: detallecompra.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){

        $insertOrder = $db->query("INSERT INTO compras (FkTipoPago,FkEmpleado, Total, FechaCompra, modified) VALUES ('".$_POST['FkTipoPago'] ."','".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO detalle_compras (FkCompra, FkPedidosCompra,FkTienda ,FkProducto,FkProveedor,Cantidad) VALUES ('".$orderID."', '".$item['IdPedidoCompra']."', '".$item['FkTiendaDestino']."','".$item['FkProducto']."','".$item['FkProveedor']."', '".$item['qty']."');";
            }
     
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: OrdenExito.php?IdPedidoCompra=$orderID");
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}