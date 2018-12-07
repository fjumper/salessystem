<?php
    class Connection {
        var $_Server = '192.168.0.20';
        var $_UserName = 'root';
        var $_UserPass = '1234';
        var $_DataBase = 'ventas';
        // var $_Server = 'localhost';
        // var $_UserName = 'root';
        // var $_UserPass = '';
        // var $_DataBase = 'dbventas30';
        
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