<?php 
    include("conexion.php");

    $correoactual = $_POST['correoactual'];
    $correoelectronico = $_POST['correonuevo'];

    $consultaTres = "UPDATE Cliente SET Email = '$correoelectronico' WHERE Email = '$correoactual'";
    $resultTwo = mysqli_query($conn,$consultaTres);

    if(mysqli_affected_rows($conn)) {
        header("location:exito-modificacion.php");
    } else {
        header("location:error-modificacion.php");
    }
    mysqli_close($conn);
?>