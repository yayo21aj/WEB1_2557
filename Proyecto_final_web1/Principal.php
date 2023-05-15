<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagenes/graf_pixel_art.jpeg" type="image/x-icon">
    <title>Pagina Principal</title>
</head>
<body>

<?php
session_start();
include "./logica/conexion.php";

$nombre_usuario= $_SESSION['usermane'];

if(!isset($nombre_usuario)){

    header("location: index.php");

}else{
    $consulta_sql= "SELECT * FROM usuarios WHERE nombre_usuario='" .$nombre_usuario. "'";
    $resultado=$conexion->query($consulta_sql);

    $count=mysqli_num_rows($resultado);
    $row=mysqli_fetch_assoc($resultado);
?>

    <div class="container w-75 bg-dark mt-3 rounded shadow">
        <div class="row">
            <h1 style="color: white;" class="fw-bold text-center pt-4 mb-3"> SALUDOS <?php echo $row['nombre_usuario']; ?></h1> 
            <h5 style="color: white;" class="fw-bold text-center pt-3 mb-3">¿Quiere actualizar los datos de un usuario?<a href="./actualizarUsuario/actualizar.php"> Actualizar</a></h5>
            <h5 style="color: white;" class="fw-bold text-center pt-2 mb-3">¿Quiere eliminar un usario?<a href="./eliminarUsuario/eliminar.html"> Eliminar</a></h5>
            <h5 style="color: white;" class="fw-bold text-center pt-2 mb-3">Salir de la pagina principal<a href='logica/salir.php'> Cerrar Sesión</a></h5>
        </div>
    </div>
<?php
    include "./listado.php";

}
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


