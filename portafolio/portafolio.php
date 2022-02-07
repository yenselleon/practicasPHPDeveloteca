
<div class="container">
    <?php  include("cabecera.php"); ?>
    
        <div class="card">

            <div class="card-header">
                Datos del proyecto
            </div>

            <div class="card-body">
                <form action="portafolio.php" method="post">

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


    
    
    
    <?php  include("pie.php"); ?>

</div>