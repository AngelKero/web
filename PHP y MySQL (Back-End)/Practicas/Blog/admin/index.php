<?php session_start();
require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

$articulos = obtener_post($blog_config['postPagina'], $conexion);


require '../views/admin_index.view.php';