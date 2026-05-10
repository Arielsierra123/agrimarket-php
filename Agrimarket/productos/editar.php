<?php
include("../config/conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if(isset($_POST['actualizar'])){

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $update = "UPDATE productos 
               SET nombre='$nombre',
                   categoria='$categoria',
                   precio='$precio',
                   stock='$stock'
               WHERE id='$id'";

    $resultado_update = mysqli_query($conexion, $update);

    if($resultado_update){

        echo "<script>
                alert('Producto actualizado');
                window.location='listar.php';
              </script>";

    }else{

        echo "<script>
                alert('Error al actualizar');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-warning">
                    <h3 class="text-center">
                        Editar Producto
                    </h3>
                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">
                            <label>Nombre</label>

                            <input type="text"
                                   name="nombre"
                                   class="form-control"
                                   value="<?php echo $fila['nombre']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Categoría</label>

                            <input type="text"
                                   name="categoria"
                                   class="form-control"
                                   value="<?php echo $fila['categoria']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Precio</label>

                            <input type="number"
                                   step="0.01"
                                   name="precio"
                                   class="form-control"
                                   value="<?php echo $fila['precio']; ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Stock</label>

                            <input type="number"
                                   name="stock"
                                   class="form-control"
                                   value="<?php echo $fila['stock']; ?>"
                                   required>
                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    name="actualizar"
                                    class="btn btn-warning">

                                Actualizar Producto

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>