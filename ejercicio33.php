<?php

$jsonContenido = '[
    {"nombre":"Yensel", "apellido":"Leon"},
    {"nombre":"Jose", "apellido":"Solorzano"}
]';

//para obtener los datos de un json se debe colocar de la siguiente manera
$resultado = json_decode($jsonContenido);

foreach($resultado as $datosJson){

    print_r("<p>Mi nombre es: $datosJson->nombre y mi apellido es: $datosJson->apellido</p>");
};

//para transformar datos a un json se debe de utilizar json_encode()
$personas=array("maria"=>40,"jose"=>35,"yoel"=>55);

echo json_encode($personas);

?>