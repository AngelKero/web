<?php 

// $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

$nombre = $_GET['nombre'] ?? 'Anonimo';// Es una forma mas corta

echo $nombre;