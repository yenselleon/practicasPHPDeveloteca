<?php

$txtNombre= "";
$rdgLenguage= "";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";
$txtComentario="";

if( $_POST ){

    $txtNombre= (isset( $_POST['txtNombre'] )) ? $_POST['txtNombre'] : "";
    $rdgLenguage= (isset( $_POST['rdgLenguage'] )) ? $_POST['rdgLenguage'] : "";
    $chkphp= (isset( $_POST['chkphp'] )) ? $_POST['chkphp'] : "";
    $chkhtml= (isset( $_POST['chkhtml'] )) ? $_POST['chkhtml'] : "";
    $chkcss= (isset( $_POST['chkcss'] )) ? $_POST['chkcss'] : "";
    $lsAnime= (isset( $_POST['lsAnime'] )) ? $_POST['lsAnime'] : "";
    $txtComentario= (isset( $_POST['txtComentario'] )) ? $_POST['txtComentario'] : "";
    /*
        Nos permite insertar informacion en nuestro html
        Se puede realizar algun calculo antes de devolverle la informacion a nuestro html
        Se pueden alterar los valores para mostrar diferentes valores modificados
    */

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ternario</title>
</head>
<body>
    
    <?php  if( $_POST ){ ?>
        
        <ul>
            <li>
                <strong>Hola: </strong> <?php echo $txtNombre;  ?>
            </li>

            <li>
                <strong>Te gusta: </strong> <?php echo $rdgLenguage;  ?>

            </li>
            <li>
                <strong>Estas aprendiendo: </strong>
                <ul>
                    <?php ($chkphp === "on") ? print_r("<li> PHP </li>") : "" ?>
                    <?php ($chkhtml === "on") ? print_r("<li> HTML </li>") : "" ?>
                    <?php ($chkcss === "on") ? print_r("<li> CSS </li>") : "" ?>
                </ul> 
                
            </li>
            <li>
                <strong>Que anime te gusta: </strong>
                    <?php echo $lsAnime ?>

            </li>
            <li>
                <strong>Tu opinion: </strong>
                    <?php echo $txtComentario ?>

            </li>
        </ul>
    
    <?php } ?>


    <form action="ejercicio31.php" method="post">

        <input type="text" name="txtNombre" id="" value="<?php echo $txtNombre; ?>">

        
        <!--Radio button-->
        <h5>Te gusta:</h5>
        <div>
            <input 
                type="radio" 
                id="phpChoice"
                name="rdgLenguage" 
                value="php"
                <?php  ($rdgLenguage === "php") ? print_r("checked") : "" ?>
            >
            <label for="phpChoice">PHP</label>
        </div>

        <div>
            <input 
                type="radio" 
                id="htmlChoice"
                name="rdgLenguage" 
                value="html"
                <?php  ($rdgLenguage === "html") ? print_r("checked") : "" ?>
            >
            <label for="htmlChoice">HTML</label>

        </div>

        <div>
            <input 
                type="radio" 
                id="cssChoice"
                name="rdgLenguage" 
                value="css"
                <?php  ($rdgLenguage === "css") ? print_r("checked") : "" ?>
            >
            <label for="cssChoice">CSS</label>

        </div>

        <!--CheckBox Button-->

        <p>Estas aprendiendo:</p>

        <div>
            <input 
                type="checkbox" 
                id="checkPhp" 
                name="chkphp"
                <?php ($chkphp === "on") ? print_r("checked") : "" ?>
            >
            <label 
                for="checkPhp"
            >
                PHP
            </label>
        </div>

        <div>
            <input 
                type="checkbox" 
                id="checkHTML" 
                name="chkhtml"
                <?php ($chkhtml === "on") ? print_r("checked") : "" ?>
            >
            <label 
                for="checkHTML"
            >
                HTML
            </label>
        </div>
        <div>
            <input 
                type="checkbox" 
                id="checkCSS" 
                name="chkcss"
                <?php ($chkcss === "on") ? print_r("checked") : "" ?>
            >
            <label 
                for="checkCSS"
            >
                CSS
            </label>
        </div>

        <section>
            <label for="anime-select">Que anime te gusta:</label>
    
            <div>
                <select name="lsAnime" id="anime-select">
                    <option value="">--Please choose an option--</option>
                    <option value="naruto" <?php $lsAnime === "naruto" ? print_r("selected") : "" ?>>Naruto</option>
                    <option value="bleach" <?php $lsAnime === "bleach" ? print_r("selected") : "" ?>>Bleach</option>
                    <option value="dragon ball" <?php $lsAnime === "dragon ball" ? print_r("selected") : "" ?>>Dragon Ball</option>
                </select>
            </div>
        </section>

        <label for="textAreaOpinion">Tienes alguna opinión:</label>
        <div>
            <textarea name="txtComentario" id="textAreaOpinion" cols="30" rows="10">
                <?php echo $txtComentario ?>
            </textarea>

        </div>

        <div>
            <input type="submit" value="Enviar Informacion">

        </div>
    </form>

</body>
</html>