<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        .btn-login {
            position: absolute;
            top: 3%;
            right: 5%;
            z-index: 10;
        }
        .card {
            position: relative;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 position-relative">
            <a href="login.php" class="btn btn-secondary btn-login">Ir al Login</a>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Registro de Usuario</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                        </div>
                        <input name="btnRegistrar" type="submit" class="btn btn-primary"/>
                        </br>
                        .
                        <?php
                        include "conexion.php";
                        include "funciones.php";
                        if(!empty($_POST["btnRegistrar"])){
                            if (!empty($_POST["nombre"]) and !empty($_POST["contraseña"])) {
                                $nombre=$_POST["nombre"];
                                $contraseña=$_POST["contraseña"];
                                if(insertarUsuario($nombre,$contraseña)){
                                    echo "<div class ='alert alert-success'>Usuario registrado exitosamente.</div>";
                                } else {
                                    echo "<div class ='alert alert-danger'>Error, el usuario no se pudo registrar.</div>";
                                }
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vincula el JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xe/T7gC6/ZXsPmd/Umtv5p0G2v8C5n0XMhDPpZoabxjF5J6RilKnW1tVp5NE20lr" crossorigin="anonymous"></script>

</body>
</html>