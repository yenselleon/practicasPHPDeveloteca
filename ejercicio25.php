<?php

class persona{

    public $nombre; // propiedades
    private $edad; // propiedad privada solo se accede si mediante un metodo dentro de la misma clase
    protected $altura; //

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

//Herencia de clases 

class trabajador extends persona{

    public $puesto;

    public function presentarseComoTrabajador(){

        echo "Hola soy ".$this->nombre." y soy ".$this-> puesto;

    }

}

$objetoTrabajador = new trabajador(); // Instancion creacion del objeto 
$objetoTrabajador -> asignarNombre("Yensel Leon");  // llamando un metodo

echo $objetoTrabajador -> nombre; // Imprimir una propiedad
$objetoTrabajador -> puesto = " Programador";
$objetoTrabajador -> presentarseComoTrabajador(); // Acceder a metodo que a su vez accede a propiedades de la caso anterior heredada


?>