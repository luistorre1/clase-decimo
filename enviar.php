<?php
    $correo="torre_luisf@yahoo.es";
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $contenido="Nombre: ".$nombre. "\nApellido: ".$apellido;
    mail($correo, "Prueba", $contenido);
?>
