<?php
    $host="localhost";
    $usuario="id17547978_helpubd";
    $contraseña="+1)US|sA?7)%kk\Z";
    $nombd="id17547978_helpu";

    $conn=new mysqli($host,$usuario,$contraseña,$nombd);
    mysqli_query($conn , SET character_set_result-utf8);
    if($conn){
        echo "Conexion exitosa";
    } else {
        echo "No se realizo la conexion a la base de datos";
    }
?>