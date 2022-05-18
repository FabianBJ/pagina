<?php

$conexion = new mysqli("localhost", "id18340792_wp_ea4761207cbf61ebd55cd5a0b3e0aa5b", "?|FVl}Z#M+8}o>9Z", "id18340792_wp_ea4761207cbf61ebd55cd5a0b3e0aa5b");
    if($conexion){
        echo "la gestion fue exitosa !!"; 
        /*header("Location: indexFormulario.php");*/

    }else{
        echo "Fallo la gestion";
    }

?>