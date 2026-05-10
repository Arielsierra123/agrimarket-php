<?php
include("config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrimarket</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">

            <a class="navbar-brand" href="#">
                AGRIMARKET
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="productos/crear.php">
                            Registrar Producto
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="productos/listar.php">
                            Ver Productos
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <!-- Contenido -->
    <div class="container mt-5">

        <div class="text-center">

            <h1 class="mb-4">
                Bienvenido a Agrimarket
            </h1>

            <p class="lead">
                Sistema de gestión de productos agrícolas
            </p>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>