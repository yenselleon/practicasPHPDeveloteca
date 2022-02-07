<?php

if($_POST){

    $valorA= $_POST["valorA"];
    $valorB= $_POST["valorB"];

    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>operdores aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio7.php" method="post">
        
        <span>Valor A</span>
        <input type="text" name="valorA" id="">
        <br>
        <span>Valor B</span>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">

    </form>

</body>
</html>