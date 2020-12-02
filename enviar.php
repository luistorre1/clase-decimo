<?php
    $correo="torre_luisf@yahoo.es";
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $contenido="Nombre: ".$nombre. "\nApellido: ".$Apellido;
    mail($correo, "Prueba", $contenido);
?>
