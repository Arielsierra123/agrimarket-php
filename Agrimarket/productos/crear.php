
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-header bg-success text-white">
                        <h3 class="text-center">
                            Registrar Producto
                        </h3>
                    </div>

                    <div class="card-body">

                        <form action="guardar.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Categoría</label>
                                <input type="text" name="categoria" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Precio</label>
                                <input type="number" step="0.01" name="precio" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Stock</label>
                                <input type="number" name="stock" class="form-control" required>
                            </div>

                            <div class="mb-3">
                               <label>Imagen del producto</label>
                               <input type="file" name="imagen" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="guardar" class="btn btn-success">
                                    Guardar Producto
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