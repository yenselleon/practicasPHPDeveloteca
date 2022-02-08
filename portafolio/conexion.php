<?php

class conexion{

    private $servidor='localhost';
    private $usuario="root";
    private $nombreDB="album";
    private $contrasenia="";
    private $conexion;


    public function __construct(){

        try {
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=$this->nombreDB",$this->usuario, $this->contrasenia);
            //Configuracion para el manejo de excepciones
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $Error) {
            return "Falla de conexion ".$Error;
        }

    }

    public function ejecutar($sql){//Insertar / Elminar / Actualizar

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar($sql){
        $sentencia= $this->conexion->prepare($sql); //obtiene los datos del comando sql
        $sentencia->execute();  //ejecuta los datos de la sentencia sql
        return $sentencia->fetchAll(); // retorna todos los registros que se puedan ejecutar con la sentencia sql | puede ser una sola columna
    }
}

?>