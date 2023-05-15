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
            background: #2A5B06;
            background: linear-gradient(to left, #F7FF00, #2A5B06);
        }
    </style>

<?php
include "../logica/conexion.php"; 
$buscarUsuario="SELECT * FROM usuarios WHERE nombre_usuario ='$_POST[nombre_usuario]'";
$result=$conexion->query($buscarUsuario);

$count=mysqli_num_rows($result);
if($count == 1){
?>
    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
            <h1 class="fw-bold text-center pt-5 mb-3">Error del Registro</h1>
            <form action="registroUsuario.php" method="post" class="row g-4 mt-4">
                <div class="my-2">
                    <h1 style="text-align: center; color: white;">Al parecer hubo un error al enviar el registro, por favor, intentelo de nuevo</h1>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Intentar de nuevo</button>
                </div>
                <div class="my-3">
                    <span>¿Ya tienes una cuenta?<a href="../index.php"> Inicia sesión</a></span>
                </div>
            </form>
        </div>
    </div>
<?php
}else{

    mysqli_query($conexion, "INSERT INTO usuarios (nombre_usuario,email,password)
    VALUES('$_POST[nombre_usuario]','$_POST[email]','$_POST[password]')");
?>
    <div class="container w-75 bg-dark mt-5 rounded shadow">
        <div class="row">
            <h1 class="fw-bold text-center pt-5 mb-3">Éxito del Registro</h1>
            <form action="registroUsuario.php" method="post" class="row g-4 mt-4">
                <div class="my-2">
                    <h1 style="text-align: center; color: white;">¡Felicidades! Ahora es parte de esta paginita</h1>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>
</head>
<body>
    
</body>
</html>