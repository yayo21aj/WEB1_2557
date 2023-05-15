<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagenes/graf_pixel_art.jpeg" type="image/x-icon">
    <title>Pagina Principal</title>

    <style>
        body{
            background: #00FF00;
            background: linear-gradient(to left, #450DEA, #00FF00);
        }
    </style>
</head>
<body>
    <?php
        $consulta_sql="SELECT * FROM usuarios";

        $resultado=$conexion->query($consulta_sql);

        $count=mysqli_num_rows($resultado);
    ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-dark"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de Usuario</th>
                                <th>Email</th>
                                <th>Contraseña</th>
                                <th>Fecha de Registro</th>
                            </tr>
                        </thead>
                        <?php
                            if ($count>0){

                             while($row=mysqli_fetch_assoc($resultado) ){

                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['nombre_usuario']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['password']."</td>";
                                echo "<td>".$row['fecha_registro']."</td>";
                                echo "</tr>";
                                } 
    
                            }else{

                                echo "<h1>Sin registros</h1>";
                            }

                        ?>                      
                </table>
                </div>
            </div>
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

