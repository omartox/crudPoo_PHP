<?php
    class clientes{

        private $id_cliente;
        private $nombre;
        private $apellidos;
        private $correo;
        private $foto;

        function __construct()
        {
            $this->id_cliente = 0;
            $this->nombre = "";
            $this->apellidos = "";
            $this->correo = "";
            $this->foto ="";
        }

        public function setNombre($dato){
            $this->nombre=$dato;
        }

        public function setApellidos($dato){
            $this->apellidos=$dato;
        }

        public function setCorreo($dato){
            $this->correo=$dato;
        }

        public function setFoto($dato){
            $this->foto=$dato;
        }
        

        public function insertar(){
            $c = new conexion();
            $db = $c->conexion();

            $sql= "INSERT INTO c_clientes(Nombre,Apellidos,Correo,Imagen) VALUES ('$this->nombre','$this->apellidos','$this->correo','$this->foto')";

            $resultado = mysqli_query($db,$sql);

            if($resultado){
				echo "Exito";

			}else{
				echo "Insercion no exitosa :(";
			}
            
            //$c->des_conexion();
        }

        public function mostrar(){
            $c = new conexion();
            $db = $c->conexion();

            $sql = "SELECT * FROM c_clientes";

            $resultado = mysqli_query($db,$sql);
            
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }

    }

?>