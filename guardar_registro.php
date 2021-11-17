<?php
  
    $nombre=$_POST['username'];
    $apellido=$_POST['surname'];
    $nacimiento=$_POST['trip-start'];
    $direccion=$_POST['adress'];
    $ciudad=$_POST['city'];
    $codigopostal=$_POST['cpostal'];
    $provincia=$_POST['province'];
    $pais=$_POST['country'];
    $email=$_POST['email'];
    $contraseñaR=$_POST['pwd'];

    print "     <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "     <p>Su apellido es <strong>$apellido</strong>.</p>\n";
    print "\n";
    print "     <p>Su fecha de nacimiento es <strong>$nacimiento</strong>.</p>\n";
    print "\n";
    print "     <p>Su direccion es <strong>$direccion</strong>.</p>\n";
    print "\n";
    print "     <p>Su ciudad es <strong>$ciudad</strong>.</p>\n";
    print "\n";
    print "     <p>Su codigo postal es <strong>$cpostal</strong>.</p>\n";
    print "\n";
    print "     <p>Su provincia es <strong>$provincia</strong>.</p>\n";
    print "\n";
    print "     <p>Su pais es <strong>$pais</strong>.</p>\n";
    print "\n";
    print "     <p>Su email es <strong>$email</strong>.</p>\n";
    print "\n";
    print "     <p>Su contraseña es <strong>$contraseñaR</strong>.</p>\n";
    print "\n";

    //Incluimos los datos de conexion y las funciones

    include("conexion.php");
    $con = mysqli_connect($host,$usuario,$contraseña,$nombd) or die ("No se ha podido conectar al servidor de la base de datos");
    if(!con){
        die("Conexion fallida: ") . mysqli_connect_error());
    }

    $db = mysqli_select_db($con, $nombd) or die ("Ups no se ha podido conectar a la base de datos");

    //INSERTAR DATOS
    $consulta="INSERT INTO Cliente (Nombre, Apellido, Nacimiento, Direccion, CP, Provincia, Pais, Email,Contraseña) VALUES('$nombre','$apellido','$nacimiento','$direccion','$ciudad','$codigopostal','$provincia','$pais','$email','$contraseñaR')";

    if(mysqli_query($con, $consulta)) {
        echo "<p>Registro agregado</p>";
    } else {
        echo "<p>No se agrego el registro</p>";
        echo "Error: " . $consulta . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);


?>