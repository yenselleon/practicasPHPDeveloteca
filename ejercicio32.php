<?php

if($_POST){

    print_r($_POST);
    //Con $_FILES puedes obtener los datos del archivo que estas subiendo como el nombre, tipo, ruta temporal y el peso del archivo
    print_r($_FILES['archivo']['size']);

    //Para guardar y mover el archivo
    //move_uploaded_file nos permite obtener el archivo de la ruta en donde este temporalmente y moverlo a la ruta que quisieramos
    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <form action="ejercicio32.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="inputFile">Upload File: </label>
            <input type="file" name="archivo" id="">
        </div>

        <input type="submit" name="enviar" value="Enviar Archivo">

    </form>
</body>
</html>