<?php

class persona{

    public $nombre; // propiedades
    private $edad; // propiedad privada solo se accede si mediante un metodo dentro de la misma clase
    protected $altura; //

    //El constructor se inicializa de manera automatica cuando declaramos la instancia de la clase
    function __construct($nuevoNombre){
        $this->nombre= $nuevoNombre;


    }

    public function asignarNombre($nuevoNombre){ // Acciones o metodos...

        $this->nombre = $nuevoNombre;

    }

    public function imprimirNombre(){
        echo $this->nombre;
    }


    public function mostrarEdad(){
        $this->edad= 20;
        return $this-> edad;
    }

}

$objAlumno = new persona(); // Instancion creacion del objeto 
$objAlumno -> asignarNombre("Yensel");  // llamando un metodo



?>