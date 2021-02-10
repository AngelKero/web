<?php session_start();
require_once 'admin/config.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location:' . RUTA . '/admin');
    }
}

require_once 'views/login.view.php';