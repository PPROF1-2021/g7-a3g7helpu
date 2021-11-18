<?php 
    $emailLogin=$_POST['emailLogin'];
    $contraseñaLogin=$_POST['contraseñaLogin'];
    session_start();
    $_SESSION['emailLogin']=$emailLogin;

    include('conexion.php');

    $consultaDos="SELECT*FROM Cliente WHERE Email='$emailLogin' and Contraseña='$contraseñaLogin'";
    $result=mysqli_query($conn,$consultaDos);

    $filas=mysqli_num_rows($result);

    if($filas) {
        header("location:bienvenida.html");
    } else {
        header("location:error-login.html");
    }

    mysqli_free_result($result);
    mysqli_close($conn);
?>