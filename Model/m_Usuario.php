<?php

    include_once "m_Cuenta.php";

    class m_Usuario extends m_Cuenta {

        private $fechanac;
        private $gustos;

        function __construct($usuario,$clave,$nombre,$apellidos,$fechanac,$gustos){
            
            parent::__construct($usuario,$clave,$nombre,$apellidos);
            $this->fechanac = $fechanac;
            $this->gustos = $gustos;
        
        }

        public function getFechanac(){
            return $this->fechanac;
        }

        public function setFechanac($fechanac){
            $this->fechanac = $fechanac;
        }


        //para los gustos, se codifica y descodifica en formato json para tratar como array
        //y luego almacenar en la base de datos
        public function getGustos(){
            $gustosdescodificados = json_decode($this->gustos);
            return $gustosdescodificados;
        }

        //en setGustos se mira si el usuario ya tenia el código del evento en sus gustos o no
        //en caso de que lo tenga, se eliminará (porque ha dado click en un botón love para desactivarlo)
        //en caso de que no lo tenga, se añadirá a sus gustos el evento.

        public function setGustos($gusto){

            $gustosdescodificados = $this->getGustos();

            if(!in_array($gusto,$gustosdescodificados)){
                $gustosdescodificados[] = $gusto;
            }

            else {
                array_splice($gustosdescodificados, array_search($gusto,$gustosdescodificados), 1);
            }

            $this->gustos = json_encode($gustosdescodificados);
            
        }


        public function insert(){

            $conexion = m_morethanplansDB::connectDB();
            $insercion = "INSERT INTO usuario (usuario, clave, nombre, apellidos, fechanac, gustos) VALUES ('".$this->usuario."','".$this->clave."','".$this->nombre."','".$this->apellidos."','".$this->fechanac."','".$this->gustos."')";
            $conexion->exec($insercion);

        }

        public function update(){

            $conexion = m_morethanplansDB::connectDB();
            $update = "UPDATE usuario SET clave='".$this->clave."', nombre='".$this->nombre."', apellidos='".$this->apellidos."', fechanac='".$this->fechanac."', gustos='".$this->gustos."'WHERE usuario='".$this->usuario."'";
            $conexion->exec($update);

        }

        public function delete(){

            $conexion = m_morethanplansDB::connectDB();
            $borrado = "DELETE FROM usuario WHERE usuario='".$this->usuario."'";
            $conexion->exec($borrado);

        }

        //devuelve un usuario de la base de datos pasando como parámetro el nombre de usuario
        public static function obtenerUsuario($usuarioBuscado){
            
            $conexion = m_morethanplansDB::connectDB();
            $consulta = $conexion->query("SELECT * FROM usuario WHERE usuario='".$usuarioBuscado."'");

            if($consulta->rowcount()<1){
                return 0;
            }

            else {

            

            while ($user = $consulta->fetchObject()) {
                $usuarioObtenido = $user->usuario;
                $claveObtenida = $user->clave;
                $nombreObtenido = $user->nombre;
                $apellidosObtenidos = $user->apellidos;
                $fechanacObtenida = $user->fechanac;
                $gustosObtenidos = $user->gustos;
            }
            
            $usuarioFinal = new m_Usuario($usuarioObtenido,$claveObtenida,$nombreObtenido,$apellidosObtenidos,$fechanacObtenida,$gustosObtenidos);

            return $usuarioFinal;
        }
        }
  
    }
?>