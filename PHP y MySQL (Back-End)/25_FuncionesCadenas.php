<?php 
    $texto = '<b>Hola</b>';
    #Tranforma los caracteres especiales en entidades HTML
    echo htmlspecialchars($texto) . '<br>';

    $texto2 = '    Hola    ';
    #Elimina los espacios de inicio y final
    echo trim($texto2) . '<br>';

    #Te devuelve el numero de caracteres de una cadena
    echo strlen($texto) . '<br>';

    #Te devuelve un pedazo de una cadena
    echo substr($texto, 1, 2) . '<br>';// Cadena, Inicio Corte, Cuantos caracteres a cortar

    #Tranforma una cadena de tetxo a mayusculas
    echo strtoupper($texto2) . '<br>';

    #Tranforma una cadena de tetxo a minusculas
    echo strtolower($texto2) . '<br>';

    #Saber en que posicion esta una letra
    echo strpos($texto2, 'a') . '<br>'; // Cadena, letra a encontrar

    /* Todas las funciones en php
        https://www.php.net/manual/en/ref.strings.php
    */
?>