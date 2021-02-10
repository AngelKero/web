<?php session_start();

if (isset($_SESSION['usuario'])) {//Si hay una sesion se accede al contenido
    require 'views/contenido.view.php';
} else{
    header('Location: index.php');//Si no hay una sesion se redirige al index
}