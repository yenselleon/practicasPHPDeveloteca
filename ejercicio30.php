<?php
//session_start seccion start permite guardar informacion dentro de variables y distribuirlas a traves de nuestras paginas hasta que se cierre el navegador
session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logeado";


echo "Seccion iniciada"."<br/>";

echo "Usuario ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];


?>