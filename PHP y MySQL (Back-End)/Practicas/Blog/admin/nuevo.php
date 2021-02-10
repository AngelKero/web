<?php session_start();
require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $archivoSubido = '../' . $blog_config['rutaImagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($thumb, $archivoSubido);

    $statement = $conexion->prepare('INSERT INTO articulos (titulo, extracto, articulo, thumb) VALUES (:titulo, :extracto, :articulo, :thumb)');
    $statement->execute([
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':articulo' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ]);

    header('Location:' . RUTA . '/admin');
}

require '../views/nuevo.view.php';