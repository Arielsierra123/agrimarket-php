<?php

$host = "127.0.0.1";
$puerto = 3307;
$usuario = "root";
$password = "";
$base_datos = "agrimarket";

$conexion = mysqli_connect($host, $usuario, $password, $base_datos, $puerto);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>