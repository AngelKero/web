<?php 
    # Operador ternario
    # isset($var) devuelve un booleano si la variable fue settiada
    
    // $edad = 18;

    $edad = (isset($edad)) ? $edad : 'El usuario no esta registrado';

    echo 'Edad: ' . $edad;
?>