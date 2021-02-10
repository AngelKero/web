<?php 
require_once 'admin/config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if(!$conexion){
    header('Location: error.php');
}

if (empty($id_articulo)) {
    header('Location: index.php');
}

$articulo = obtener_post_id($conexion, $id_articulo);

if(!$articulo){
    header('Location: index.php');
}

$articulo = $articulo[0];

require_once 'views/single.view.php';