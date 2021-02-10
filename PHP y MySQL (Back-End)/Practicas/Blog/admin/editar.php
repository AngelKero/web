<?php session_start();
require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = limpiarDatos($_POST['Id']);
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];
    $thumb_guardada = $_POST['thumb-guardada'];

    var_dump($_POST);

    if (empty($_FILES['thumb']['name'])) {
        $thumb = $thumb_guardada;
    } else{
        $archivoSubido = '../' . $blog_config['rutaImagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($thumb, $archivoSubido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare('UPDATE articulos 
    SET titulo = :titulo, extracto = :extracto, articulo = :articulo, thumb = :thumb 
    WHERE id = :id');
    $statement->execute([
        'titulo' => $titulo,
        'extracto' => $extracto,
        'articulo' => $texto,
        'thumb' => $thumb,
        'id' => $id
    ]);

    header('Location:' . RUTA . '/admin');
} else{
    $id = limpiarDatos($_GET['id']);
    if (empty($id)) {
        header('Location:' . RUTA . 'admin/');
    }
    $articulo = obtener_post_id($conexion, $id);
    if (!$articulo) {
        header('Location:' . RUTA . 'admin/');
    }
    $articulo = $articulo[0];
}

require '../views/editar.view.php';