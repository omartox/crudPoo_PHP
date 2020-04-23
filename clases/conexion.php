<?php
    class conexion{

        private $servidor="localhost";
        private $usuario = "root";
        private $password = "";
        private $db="crud_poo";

        function __construct()
        {
            
        }

        public function conexion(){
            $conexion = mysqli_connect($this->servidor,$this->usuario,$this->password,$this->db);
            return $conexion;
        }

        public function des_conexion($conexion){
            mysqli_close($conexion);
        }

    }
?>