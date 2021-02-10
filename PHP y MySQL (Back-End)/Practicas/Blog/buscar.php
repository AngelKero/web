<?php 
require_once 'admin/config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare('SELECT * FROM articulos WHERE titulo LIKE :busqueda or articulo LIKE :busqueda');
    $statement->execute([':busqueda' => "%$busqueda%"]);

    $articulos = $statement->fetchAll();

    if (empty($articulos)) {
        $titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
    } else{
        $titulo = 'Resultados de la busqueda: ' . $busqueda;
    }
} else{
    header('Location: index.php');
}


require_once 'views/buscar.view.php';