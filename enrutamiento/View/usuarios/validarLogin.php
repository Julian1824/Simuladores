<?php
session_start();
include '../../Model/conexion.php';



$userLogin = $_POST['userLogin'];

$querySession = "SELECT * FROM usuario_e WHERE user_login = '$userLogin' ";
$resultadoSession = mysqli_query($conexion, $querySession);
$filasLogin = mysqli_num_rows($resultadoSession);
if ($filasLogin) {

    $sql = $conexion->query("INSERT INTO registro_ingresos (registro_de_ingreso) VALUES('$userLogin')");
    if ($sql == 1) {
        $_SESSION['time'] = time();
        $_SESSION['userLogin'] = $userLogin;
        header("location:../../enrutadores.php");
    } else {
        echo 'no registro';
    }
} else {
    echo "<script> alert('Usuario no encontrado en la base de datos'); window.history.go(-1); </script>";
}