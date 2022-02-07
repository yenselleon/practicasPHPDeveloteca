<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";

try {

    //PDO nos permite contectarnos a la base de datos teniendo en cuenta que se esta utilizando xaamp que permite utilizar PDO que es una libreria ya instalada en xaamp
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();

    $resultado= $sentencia->fetchAll();

    foreach ($resultado as $foto) {
        echo $foto['archivo']."<br/>";
    }

    echo "Conexion establecida";

} catch (PDOException $error) {

    echo "Conexion erronea".$error;

}

?>