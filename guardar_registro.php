<?php
    include("conexion.php");

    $nombre=$_POST['username'];
    $apellido=$_POST['surname'];
    $nacimiento=$_POST['trip-start'];
    $direccion=$_POST['adress'];
    $ciudad=$_POST['city'];
    $codigopostal=$_POST['cpostal'];
    $provincia=$_POST['province'];
    $pais=$_POST['country'];
    $email=$_POST['email'];
    $contraseña=$_POST['pwd'];

    //INSERTAR DATOS
    $query="INSERT INTO Cliente(Nombre,Apellido,Nacimiento,Direccion,CP,Provincia,Pais,Email,Contraseña) VALUES('$nombre','$apellido','$nacimiento','$direccion','$ciudad','$codigopostal','$provincia','$pais','$email','$contraseña')"

    //VERIFICACION
    $resultado=$conexion->query($query);

    if($resultado){
        echo "Datos insertados correctamente";
    } else {
        echo "No se insertaron los datos";
    }
?>