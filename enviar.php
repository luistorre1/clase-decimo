<?php
    $correo="torre_luisf@yahoo.es";
    $nombre=$_post["Nombre"];
    $apellido=$_post["Apellido"];
    $contenido="Nombre: ".$nombre. "\nApellido: ".$Apellido;
    mail($correo, "Prueba", $contenido);
?>