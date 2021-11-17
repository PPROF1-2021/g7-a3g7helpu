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
    
   
    //Incluimos los datos de conexion y las funciones

    include("conexion.php");
    $con = mysqli_connect($host,$usuario,$contraseña,$nombd) or die ("No se ha podido conectar al servidor de la base de datos");
    if(!$con){
        die("Conexion fallida: ") . mysqli_connect_error();
    }

    $db = mysqli_select_db($con, $nombd) or die ("Ups no se ha podido conectar a la base de datos");

    //INSERTAR DATOS
    $consulta="INSERT INTO Cliente (Nombre, Apellido, Nacimiento, Direccion, Ciudad, CP, Provincia, Pais, Email,Contraseña) VALUES('$nombre','$apellido','$nacimiento','$direccion','$ciudad','$codigopostal','$provincia','$pais','$email','$contraseñaR')";

   if(mysqli_query($con, $consulta)) {
        
    } else {
        echo "<p>No se agrego el registro</p>";
        echo "Error: " . $consulta . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon1.png" />
	<script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="funcionesGrupo7.js"></script>
    <title>helpu - Registro exitoso!</title>
</head>
<body>
    <header class="header-secundary" id="headersecundary001">
		<nav class="nav-left-secundary" id="navleftsecundary002">
			<a href="index.html" class="home">Vuelve al inicio</a>
		</nav>
		<nav class="nav-right-secundary" id="navrightsecundary002">
			<a href="logueo.html" class="boton-blanco" id="botonlogin001">Inicia sesión</a>
			<a href="registro.html" class="boton-rojo" id="botonregistrate001">Regístrate</a>
			<a href="contacto.html" class="boton-contacto" id="botoncontacto">Contacto</a>
		</nav>
	</header>
    <section class="d-flex justify-content-center align-items-center mt-5 pt-5 mb-3" id="seccion">
		<div id="contenedor-datos" class="contenedorDatos">
            <h4>Felicidades <?php echo $nombre?> <?php echo $apellido?> ya sos parte de helpU! Según lo que ingresaste te encontrás en: <?php echo $direccion?>, <?php echo $ciudad?>, <?php echo $provincia?>, <?php echo $pais?>. Esperamos poder ser de gran ayuda ante cualquier emergencia que se te presente!</h4>
		</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
		crossorigin="anonymous"></script>
	<footer class="container-fluid" id="footer1">
		<div class="m-3 text-white text-center" id="derechos1">
			<p>© 2021 helpU - Todos los derechos reservados</p>
		</div>
	</footer>    
</body>
</html>