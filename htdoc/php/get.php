<?php

    include 'config.php';

    class get{
        
        function getGeneros(){
            $con = new Connection();
            $cmd = $con->get_connection();
            $datos = $cmd->query("CALL spListarGeneros()");
            return $datos;
        }

        function getDepartamentos(){
            $con = new Connection();
            $cmd = $con->get_connection();
            $datos = $cmd->query("CALL spListarDepartamentos()");
            return $datos;
        }

        function getProveedores(){
            $con = new Connection();
            $cmd = $con->get_connection();
            $datos = $cmd->query("CALL spListarProveedores()");
            return $datos;
        }

        function getProductosCatalogo(){
            $con = new Connection();
            $cmd = $con->get_connection();
            $datos = $cmd->query("SELECT pv.IdProductoVenta, p.Producto, p.Descripcion, p.Imagen, p.Cantidad, pve.PrecioVenta, pv.Prioridad
            FROM productos_venta pv
            INNER JOIN productos p ON pv.FkProducto = p.IdProducto
            INNER JOIN precios_venta pve ON pv.FkPrecioVenta = pve.IdPrecioVenta");
            return $datos;
        }
    }

?>