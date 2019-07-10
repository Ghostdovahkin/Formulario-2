<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$t_documento = $_POST['t_documento'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO datos VALUES('','$nombre','$apellido','$t_documento','$documento','$telefono','$direccion')";

$ejecutar= mysqli_query($conectar,$sql);

if(!$ejecutar){

    echo "<script>alert('error en los datos')</script>";
    echo "<script>location.href='../index.php'</script>";
}else{
    echo "<script>alert('datos guardados correctamente')</script>";
    echo "<script>location.href='../index.php'</script>";
}
?>