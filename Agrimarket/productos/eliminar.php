<?php

include("../config/conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";

$resultado = mysqli_query($conexion, $sql);

if($resultado){

    echo "<script>
            alert('Producto eliminado correctamente');
            window.location='listar.php';
          </script>";

}else{

    echo "<script>
            alert('Error al eliminar');
            window.location='listar.php';
          </script>";
}

?>