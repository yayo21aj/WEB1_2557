<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagenes/graf_pixel_art.jpeg" type="image/x-icon">
    <title>Registro</title>

    <style>
        body{
            background:  #12E1E0;
            background: linear-gradient(to right, #12E1E0, #930AAB);
        }
    </style>
</head>
<body>

    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
            <h1 style="color: white;" class="fw-bold text-center pt-5 mb-3">Introduzca sus datos</h1>
            <form action="mandarRegistro.php" method="post" class="row g-4 mt-4">
                <div class="col-12">
                    <label style="color: white;"  for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                    <input type="text" name="nombre_usuario" class="form-control" placeholder="Escribe tu nombre de usuario">
                </div>
                <div class="col-12">
                    <label style="color: white;" for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" placeholder="Escribe tu correo electrónico">
                </div>
                <div class="col-12">
                    <label style="color: white;"  for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar registro</button>
                </div>
                <div class="my-3">
                    <span style="color: white;" >¿Ya tienes una cuenta?<a href="../index.php"> Inicia sesión</a></span>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>