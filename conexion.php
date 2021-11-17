<?php
    $host="localhost";
    $usuario="id17547978_helpubd";
    $contraseña="+1)US|sA?7)%kk\Z";
    $nombd="id17547978_helpu";

    $conexion=new mysqli($host,$usuario,$contraseña,$nombd);

    if($conexion){
        echo "Conexion exitosa";
    } else {
        echo "No se realizo la conexion a la base de datos";
    }
?>