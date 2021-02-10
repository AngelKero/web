<?php session_start();

if (isset($_SESSION['usuario'])) {// si hay una sesion se accede al contenido
    header('Location: contenido.php');
} else{
    header('Location: login.php');// si no hay una sesion se redirige al login
}