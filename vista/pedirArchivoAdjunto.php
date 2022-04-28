<?php

    $ruta = $_GET["ruta"];
    $id = $_GET["id"];

    if ( $ruta == "0"){
        $ruta = "ONE DRIVE";
        $id = "0";
    }
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
            <title>ruta</title>
            <style type="text/css" media="screen">
                @import '../../css/estiloFormulario.css';
                body {
                    font-family: 'Raleway', sans-serif;
                    background-image: radial-gradient(circle at center, #899Dc4, #495D84);
                    background-size: cover;
                    background-repeat: no-repeat;
                    height: 100vh;
                    overflow: hidden;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: radial-gradient(ellipse at bottom, #1b2735, #090a0f);
                    font-weight: 300;
                    color: rgb(113, 236, 226);
                }

                a {
                    color: fuchsia;
                }
            </style>
        </head>
    <body>
        <form action = "../adjuntarArchivo.php" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="carpeta" >Carpeta: </label>
                    <input name="carpeta" value="<?php echo $ruta; ?>" readonly> 
                </li>
                <li>
                    <label hidden for="id" >Id: </label>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                </li>
                <li>
                    <label for="archivo">Adjuntar fichero: </label>
                    <input type="file" id="archivo" name="archivo" />
                </li>
            </ul>
            <li class="button">
                <button type="submit">Adjuntar documento</button>
            </li>
            <a href=../../index.php>Volver al menu</a>
        </form>
    </body>
</html>
