<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagenes/graf_pixel_art.jpeg" type="image/x-icon">
    <title>Actualizar</title>

    <style>
        body{
            background: #0764F9;
            background: linear-gradient(to right, #8F9306, #0764F9);
        }
    </style>
</head>
<body>

<?php
    $id = $_GET['id']; 
    $nombre_usuario = $_GET['nombre_usuario'];
    $email = $_GET['email'];
    $password = $_GET['password'];
?>

    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
        <h1 style="color: white;" class="fw-bold text-center pt-5 mb-3">Introduzca sus Nuevos Datos</h1>
        <form class="row g-4 mt-4" method="POST" action="mandarActualizacion.php">
            <div class="col-12">
                <label style="color: white;"  for="nombre_usuario" class="form-label">ID del Usuario</label>
                <input type="text" name="id" class="form-control" placeholder="Introduzca el ID del usuario que desee actualizar" syle="hidden" value="<?=$id?>"/>
            </div>
            <div class="col-12">
                <label style="color: white;"  for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" name="nombre_usuario" class="form-control" value="<?=$nombre_ususario?>" placeholder="Ingresa tu Nombre de Usuario"/>
            </div>
            <div class="col-12">
                <label style="color: white;"  for="nombre_usuario" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" value="<?=$email?>" placeholder="Ingresa tu correo electrónico" />
            </div>
            <div class="col-12">
                <label style="color: white;"  for="nombre_usuario" class="form-label">Contraseña</label>
                <input type="text" name="password" class="form-control" value="<?=$password?>" placeholder="Ingresa tu contraseña" />
            </div>
            <div class="d-grid">
                <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
            </div>
            <div class="my-3">
                    <span style="color: white;"><a href="../Principal.php"> Cancelar</a></span>
            </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>