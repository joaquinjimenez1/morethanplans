<?php

    include_once "m_Cuenta.php";

    class m_Organizador extends m_Cuenta {

        private $empresa;

        function __construct($usuario,$clave,$nombre,$apellidos,$empresa){

            parent::__construct($usuario,$clave,$nombre,$apellidos);
            $this->empresa = $empresa;

        }

        public function getEmpresa(){
            return $this->empresa;
        }

        public function setEmpresa($empresa){
            $this->empresa = $empresa;
        }

        public function insert(){

            $conexion = m_morethanplansDB::connectDB();
            $insercion = "INSERT INTO organizador (usuario, clave, nombre, apellidos, empresa) VALUES ('".$this->usuario."','".$this->clave."','".$this->nombre."','".$this->apellidos."','".$this->empresa."')";
            $conexion->exec($insercion);

        }

        public function update(){

            $conexion = m_morethanplansDB::connectDB();
            $update = "UPDATE organizador SET clave='".$this->clave."', nombre='".$this->nombre."', apellidos='".$this->apellidos."', empresa='".$this->empresa."'WHERE usuario='".$this->usuario."'";
            $conexion->exec($update);

        }

        public function delete(){

            m_Organizador::borrarPlanesOrganizados($_SESSION['usuariomtp']);

            $conexion = m_morethanplansDB::connectDB();
            $borrado = "DELETE FROM organizador WHERE usuario='".$this->usuario."'";
            $conexion->exec($borrado);

        }

        //devuelve un objeto organizador de la base de datos pasando como parámetro el nombre de usuario
        public static function obtenerOrganizador($organizadorBuscado){
            
            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM organizador WHERE usuario='".$organizadorBuscado."'");

            while ($user = $consulta->fetchObject()) {
                $usuarioObtenido = $user->usuario;
                $claveObtenida = $user->clave;
                $nombreObtenido = $user->nombre;
                $apellidosObtenidos = $user->apellidos;
                $empresaObtenida = $user->empresa;
            }
            
            $organizadorFinal = new m_Organizador($usuarioObtenido,$claveObtenida,$nombreObtenido,$apellidosObtenidos,$empresaObtenida);

            return $organizadorFinal;

        }

    }
?>