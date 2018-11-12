<?php
    class Connection {
        var $_Server = 'localhost';
        var $_UserName = 'root';
        var $_UserPass = '';
        var $_DataBase = 'dbventas';
        // var $_Server = 'db4free.net';
        // var $_UserName = 'ahuanay';
        // var $_UserPass = 'ahuanay1995';
        // var $_DataBase = 'dbventas';
        
        function getConnection() {
            if (!($conexion = new mysqli($this -> _Server, $this -> _UserName, $this -> _UserPass, $this -> _DataBase)))
            {
                echo "Error Conectando la base de Datos";
                exit();
            }
            return $conexion;
        }
    }
?>