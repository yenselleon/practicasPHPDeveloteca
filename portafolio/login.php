<?php

session_start();

if($_POST){

    if( ($_POST['usuario']=='yensel') && ( $_POST['contrasenia'] == "12345" ) ){

        $_SESSION['usuario']=$_POST['usuario'];
        header("location:index.php");
        

    }else{
        echo "<script> alert('el usuario o contraseña son incorrectos'); </script>";
    }   

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card">

                <div class="card-header">
                    Iniciar Sesion
                </div>

                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="inputUsuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="inputUsuario" aria-describedby="emailHelp" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword1" name="contrasenia">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Entrar al portafolio</button>

                        </div>
                    </form>
                </div>
            </div>
            


        </div>
    </div>

</body>
</html>