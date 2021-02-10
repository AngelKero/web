<?php 

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('No se puede conectar');
} else{
    $sql = "INSERT INTO usuarios (nombre,edad) VALUES ('Bernando','50')";
    $conexion->query($sql);

    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }
}
