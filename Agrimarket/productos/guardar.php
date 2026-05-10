<?php

include("../config/conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $imagen = $_FILES['imagen']['name'];
    $temp = $_FILES['imagen']['tmp_name'];

    $ruta = "../assets/img/" . basename($imagen);

    move_uploaded_file($temp, $ruta);

    $sql = "INSERT INTO productos(nombre, categoria, precio, stock, imagen)
    VALUES('$nombre','$categoria','$precio','$stock','$imagen')";

    mysqli_query($conexion, $sql);

    header("Location: listar.php");
    exit();

}

?>