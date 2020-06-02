<?php
    session_start();
    include_once "m_morethanplansDB.php";
    
    abstract class m_Cuenta {

        protected $usuario;
        protected $clave;
        protected $nombre;
        protected $apellidos;

        function __construct($usuario,$clave,$nombre,$apellidos){
            $this->usuario = $usuario;
            $this->clave = $clave;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
        }
        
        public function getUsuario(){
            return $this->usuario;
        }

        public function getclave(){
            return $this->clave;
        }

        public function setclave($clave){
            $this->clave = $clave;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        //Comprueba si las credenciales son correctas en la base de datos.
        public static function compruebaCredenciales($usuarioe,$clavee){

            $conexion = m_morethanplansDB::connectDB();
            $consulta1 = $conexion->query("SELECT * FROM usuario WHERE usuario='".$usuarioe."'");
            $consulta2 = $conexion->query("SELECT * FROM organizador WHERE usuario='".$usuarioe."'");

            if($consulta1->rowCount() > 0){

                $_SESSION['tipo'] = "usuario";
                while ($user = $consulta1->fetchObject()) {
                    $pass = $user->clave;
                }
                if (password_verify($clavee,$pass)) {
                    return true;
                }
                else {
                    return false;
                }

            }
            
            else if($consulta2->rowCount() > 0){

                $_SESSION['tipo'] = "organizador";
                while ($user = $consulta2->fetchObject()) {
                    $pass = $user->clave;
                }
                if (password_verify($clavee,$pass)) {
                    return true;
                }
                else {
                    return false;
                }

            }
    
            else {
                return false;
            }


            

            
        

        }

    }



?>