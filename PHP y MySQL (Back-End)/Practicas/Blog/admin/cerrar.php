<?php session_start();
require 'config.php';
require '../functions.php';

session_destroy();
$_SESSION = [];

header('Location:' . RUTA);
die();