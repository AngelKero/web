<?php 
    $edad = 19;
    $nombre = 'Angel';

    if ($edad >= 18 && $nombre == 'Angel') {
        print '<h1>Bienvenido</h1>';
    }

    if ($edad < 18 || $nombre != 'Angel') {
        print '<h1>Eres menor de edad</h1>';
    }
?>