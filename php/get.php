<?php

    require 'config.php';

    class get{

        function getSP($sp){
            $con = new Connection();
            $cmd = $con->getConnection();
            $cmd->query("SET NAMES UTF8");
            $cmd->query("SET CHARACTER SET utf8");
            $datos = $cmd->query("CALL ". $sp);
            $cmd->close();
            return $datos;
        }
    }

?>