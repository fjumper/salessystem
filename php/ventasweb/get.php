<?php

    require '../../php/config.php';

    class get{
        
        function getGeneros(){
            $con = new Connection();
            $cmd = $con->getConnection();
            $datos = $cmd->query("CALL spListarGeneros()");
            $cmd->close();
            return $datos;
        }

        function getDepartamentos(){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarDepartamentos()");
            $cmd->close();
            return $datos;
        }

        function getProvincias($IdDepartamento){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProvincias('$IdDepartamento')");
            $cmd->close();
            return $datos;
        }

        function getDistritos($IdProvincia){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos= $cmd->query("CALL spListarDistritos('$IdProvincia')");
            $cmd->close();
            return $datos;
        }

        function getListarDeseosCliente($Usuario){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarDeseosCliente('$Usuario')");
            $cmd->close();
            return $datos;
        }

        function getStockProducto($Id){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spStockProducto('$Id')");
            $cmd->close();
            return $datos;
        }

        function getEstadosCivil(){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos= $cmd->query("CALL spListarEstadosCivil()");
            $cmd->close();
            return $datos;
        }

        function getProductosCatalogo(){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProdCatalogo()");
            $cmd->close();
            return $datos;
        }

        function getListarCategoria(){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarCategoria()");
            $cmd->close();
            return $datos;
        }

        function getListarSubCategoria($IdCategoria){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarSubcategorias('$IdCategoria')");
            $cmd->close();
            return $datos;
        }

        function getProductosId($Id){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProductoId('$Id')");
            $cmd->close();
            return $datos;
        }

        function getProductosCategoria($IdCategoria){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProductoCategoria('$IdCategoria')");
            $cmd->close();
            return $datos;
        }

        function getCategoriaId($IdCategoria){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spCategoriaId('$IdCategoria')");
            $cmd->close();
            return $datos;
        }

        function getSubCategoriaId($IdCategoria, $IdSubCategoria){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spSubCategoriaId('$IdCategoria', '$IdSubCategoria')");
            $cmd->close();
            return $datos;
        }
        
        function getProductosCatSubCat($IdCategoria, $IdSubCategoria){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProductoCatSubCat('$IdCategoria', '$IdSubCategoria')");
            $cmd->close();
            return $datos;
        }

        function getProductosCatSubCatMinMax($IdCategoria, $IdSubCategoria, $pMin, $pMax){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProductoCatSubCatMinMax('$IdCategoria', '$IdSubCategoria', '$pMin', '$pMax')");
            $cmd->close();
            return $datos;
        }

        function getProductosNombre($Nombre){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spListarProductoNombre('$Nombre')");
            $cmd->close();
            return $datos;
        }

        function getLogin($UserName, $UserPass){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL spLogin('$UserName', '$UserPass')");
            $cmd->close();
            return $datos;
        }
    }

?>