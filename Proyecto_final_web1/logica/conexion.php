<?php
$host_db="127.0.0.1:3306";
$user_db="root";
$pass_db="";
$name_db="proyecto_web";

$conexion = new mysqli($host_db,$user_db,$pass_db,$name_db);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>

