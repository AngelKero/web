<?php session_start();
#Se destruye la sesion
session_destroy();
$_SESSION = [];//Por si hay algun problema

header('Location: index.php');//Se redirige al index
die();//Se mata la pagina por si acaso
