<?php  

include("cabecera.php"); 
include("conexion.php"); 

if($_POST){
    $objConexion= new conexion();
    $nombreInput= $_POST['nombre'];
    
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombreInput', 'imagen.jpg', 'es un ecommerce');";
    $objConexion-> ejecutar($sql);
    
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
                            <input type="text" name="nombre" class="form-control" id="inputNombre">
    
                        </div>
                        <div class="">
                            <label for="inputFile" class="form-label">Imagen del proyecto</label>
                            <input type="file" name="fileInput" class="form-control" id="inputFile">
    
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($proyectos as $proyecto){
                            
                            print_r("
                                <tr>
                                    <td>$proyecto[id]</td>
                                    <td>A$proyecto[nombre]</td>
                                    <td>$proyecto[imagen]</td>
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