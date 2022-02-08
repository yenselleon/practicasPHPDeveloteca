<?php  

include("cabecera.php"); 
include("conexion.php"); 

if($_POST){
    $objConexion= new conexion();
    $nombreInput= $_POST['nombre'];
    $textAreaDecripcion= $_POST['textAreaDecripcion'];

    $fecha= new DateTime();

    //anexar y mover imagen
    $imagenName= $fecha->getTimestamp()."_".$_FILES['fileInput']['name'];
    $imagen_temporal=$_FILES['fileInput']['tmp_name'];
    move_uploaded_file($imagen_temporal,"images/".$imagenName);

    //anexar data a la base de datos
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombreInput', '$imagenName', '$textAreaDecripcion');";
    $objConexion-> ejecutar($sql);
    header('location:portafolio.php');
    
}

if($_GET){
    // "DELETE FROM `proyectos` WHERE `proyectos`.`id` = 1"
    $id=$_GET['borrar'];
    $objConexion= new conexion();

    $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);

    unlink("images/".$imagen[0]['imagen']);

    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion-> ejecutar($sql);
    header('location:portafolio.php');

}

$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");



?>

<div class="container">
    
    <div class="row mt-4">

        <div class="col-md-6">
            <!--Form-->
            <div class="card">
    
                <div class="card-header">
                    Datos del proyecto
                </div>
    
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
    
                        <div class="">
                            <label for="inputNombre" class="form-label">Nombre del proyecto</label>
                            <input type="text" required name="nombre" class="form-control" id="inputNombre">
    
                        </div>
                        <div class="">
                            <label for="inputFile" class="form-label">Imagen del proyecto</label>
                            <input type="file" required name="fileInput" class="form-control" id="inputFile">
    
                        </div>
                        <div class="">
                            <label for="txtAreaDecripcion" class="form-label">Descripcion</label>
                            <textarea name="textAreaDecripcion" required id="txtAreaDecripcion" cols="10" rows="5" class="form-control">

                            </textarea>
    
                        </div>
    
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary">Enviar Informacion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <!--table-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($proyectos as $proyecto){
                            
                            print_r("
                                <tr>
                                    <td>$proyecto[id]</td>
                                    <td>$proyecto[nombre]</td>
                                    <td>
                                        <img width='100' src='images/$proyecto[imagen]'>
                                    </td>
                                    <td>$proyecto[descripcion]</td>
                                    <td>
                                        <a class='btn btn-danger' href='?borrar=$proyecto[id]'>Eliminar</a>
                                    </td>
                                </tr>
                            ");

                        }

                    ?>

                </tbody>
            </table>
        </div>


    </div>


    
    
    
    <?php  include("pie.php"); ?>

</div>