<?php
include("../config/conexion.php");

/* TOTAL PRODUCTOS */
$sql_productos = "SELECT COUNT(*) AS total FROM productos";
$resultado_productos = mysqli_query($conexion, $sql_productos);
$total_productos = mysqli_fetch_assoc($resultado_productos);

/* TOTAL STOCK */
$sql_stock = "SELECT SUM(stock) AS stock_total FROM productos";
$resultado_stock = mysqli_query($conexion, $sql_stock);
$total_stock = mysqli_fetch_assoc($resultado_stock);

/* VALOR INVENTARIO */
$sql_valor = "SELECT SUM(precio * stock) AS valor_total FROM productos";
$resultado_valor = mysqli_query($conexion, $sql_valor);
$total_valor = mysqli_fetch_assoc($resultado_valor);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Agrimarket</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1 class="text-center text-success mb-5">
        Dashboard Agrimarket
    </h1>

    <div class="row">

        <!-- Productos -->
        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5 class="card-title">
                        Total Productos
                    </h5>

                    <h2 class="text-success">
                        <?php echo $total_productos['total']; ?>
                    </h2>

                </div>

            </div>

        </div>

        <!-- Stock -->
        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5 class="card-title">
                        Total Stock
                    </h5>

                    <h2 class="text-primary">
                        <?php echo $total_stock['stock_total']; ?>
                    </h2>

                </div>

            </div>

        </div>

        <!-- Valor inventario -->
        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5 class="card-title">
                        Valor Inventario
                    </h5>

                    <h2 class="text-danger">
                        $ <?php echo number_format($total_valor['valor_total']); ?>
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div class="text-center mt-5">

        <a href="../productos/listar.php" class="btn btn-success">
            Ver Productos
        </a>

    </div>

</div>

</body>
</html>