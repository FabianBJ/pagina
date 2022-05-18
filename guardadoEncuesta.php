<?php

      include("abreEncuesta.php");


      $Nombre       = $_POST['Nombre']; 
      $Apellido     = $_POST['Apellido']; 
      $Pais         = $_POST['Pais'];  
      $Correo       = $_POST['Correo'];
      $Mensaje      = $_POST['message'];
      


      $consulta = "INSERT INTO usuarios(Nombre, Apellido, Pais, Correo, message) VALUES
    ('$Nombre' , '$Apellido', '$Pais', '$Correo', '$Mensaje')";



        if ($conexion->query($consulta) === TRUE) {
     /*header("Location: index.php");*/       
}else{
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}
$conexion->close();


    ?>