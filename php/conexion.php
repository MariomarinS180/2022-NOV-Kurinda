<?php
    $servidor="localhost";
    $nombd="ku";
    $us="root";
    $con="losdec211299";
    $conexion = new mysqli($servidor, $us, $con, $nombd);
    if($conexion -> connect_error ){
        die("No se pudo acceder");
        

    }
?>