<?php
include("../config/conexion.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrimarket - Productos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="text-success">
            🚜 Agrimarket
        </h1>

        <div>

            <a href="crear.php" class="btn btn-success">
                Nuevo Producto
            </a>

            <a href="../logout.php" class="btn btn-danger">
                Cerrar sesión
            </a>

        </div>

    </div>

    <div class="row">

    <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100 border-0">

                <img src="../assets/img/<?php echo $fila['imagen']; ?>" 
                     class="card-img-top"
                     style="height:250px; object-fit:cover;">

                <div class="card-body">

                    <h4 class="card-title text-success">
                        <?php echo $fila['nombre']; ?>
                    </h4>

                    <p class="card-text">
                        <strong>Categoría:</strong>
                        <?php echo $fila['categoria']; ?>
                    </p>

                    <p class="card-text">
                        <strong>Precio:</strong>
                        $ <?php echo $fila['precio']; ?>
                    </p>

                    <p class="card-text">
                        <strong>Stock:</strong>
                        <?php echo $fila['stock']; ?>
                    </p>

                    <p class="card-text text-muted">
                        Registro:
                        <?php echo $fila['fecha_registro']; ?>
                    </p>

                </div>

                <div class="card-footer bg-white border-0 d-flex justify-content-between">

                    <a href="editar.php?id=<?php echo $fila['id']; ?>" 
                       class="btn btn-warning btn-sm">
                       Editar
                    </a>

                    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Desea eliminar este producto?')">

                       Eliminar

                    </a>

                </div>

            </div>

        </div>

    <?php } ?>

    </div>

</div>

</body>
</html>