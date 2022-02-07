<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";

try {

    //PDO nos permite contectarnos a la base de datos teniendo en cuenta que se esta utilizando xaamp que permite utilizar PDO que es una libreria ya instalada en xaamp
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `archivo`, `ruta`) VALUES (NULL, 'aprendiendo a mysql', 'foto.jpg');";
    $conexion->exec($sql);

    echo "Conexion establecida";

} catch (PDOException $error) {

    echo "Conexion erronea".$error;

}

?>