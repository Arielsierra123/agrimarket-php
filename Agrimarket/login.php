<?php
session_start();

include("config/conexion.php");

if(isset($_POST['ingresar'])){

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios 
            WHERE correo='$correo'
            AND password='$password'";

    $resultado = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($resultado) > 0){

        $_SESSION['usuario'] = $correo;

        header("Location: dashboard/dashboard.php");

    }else{

        echo "<script>
                alert('Correo o contraseña incorrectos');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Agrimarket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-success text-white text-center">

                    <h3>
                        AGRIMARKET
                    </h3>

                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">

                            <label>Correo</label>

                            <input type="email"
                                   name="correo"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label>Contraseña</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    name="ingresar"
                                    class="btn btn-success">

                                Ingresar

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