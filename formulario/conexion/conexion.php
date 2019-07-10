<?php
$localhost="localhost";
$usuario="root";
$contraseña="password";
$basedatos="formulario";

$conectar= mysqli_connect($localhost,$usuario,$contraseña,$basedatos) or die("error en el servidor");
mysqli_select_db($conectar,$basedatos)or die ("error en la base de datos");


?>