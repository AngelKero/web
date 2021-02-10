<?php 

# Se guarda en una variable la conexion
# direccion host; usuario, contraseña, nombre base de datos 
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

# Se llama a la variable connect_errno
# Devuelve 1 si hay un error, sino devuelve null
if($conexion->connect_errno){
    die('No se puede conectar');
} else{
    //codigo...
}
