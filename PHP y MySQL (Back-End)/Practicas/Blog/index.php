<?php 
require_once 'admin/config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

$articulos = obtener_post($blog_config['postPagina'], $conexion);

if(!$articulos){
    header('Location: error.php');
}


require_once 'views/index.view.php';