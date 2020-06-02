<?php

abstract class m_morethanplansDB {
//Modificar nombre, usuario y clave de la base de datos para un correcto funcionamiento.
private static $server = 'localhost'; 
private static $db = 'morethanplans'; 
private static $user = 'root'; 
private static $password = 'root';

    public static function connectDB() { 
            try {
        $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";charset=utf8", self::$user, self::$password);
        } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>"; die ("Error: " . $e->getMessage());
        }
        
    return $connection; 

    }
}

?>