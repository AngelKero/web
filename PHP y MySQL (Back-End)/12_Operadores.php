<?php 


    /*  Operadores Aritmeticos:

        + Suma
        - Resta
        * Multiplicacion
        / Division
        % Residuo Division

    */

    $numero = 10;
    $numero2 = 6;

    $resultado = $numero + $numero2;
    $resultado = $numero - $numero2;
    $resultado = $numero * $numero2;
    $resultado = $numero / $numero2;
    $resultado = $numero % $numero2;
    echo $resultado . '<br>';

    #--------------------------------------------------

    /*  Operadores de Asignacion:

        =
        +=  asignacion1 = asignacion1 + asignacion2;
        -=  asignacion1 = asignacion1 - asignacion2;
        *=  asignacion1 = asignacion1 * asignacion2;
        /=  asignacion1 = asignacion1 / asignacion2;

    */

    $asignacion1 = 10;
    $asignacion2 = 5;    

    $asignacion1 += $asignacion2;
    echo $asignacion1 . '<br>';

    #--------------------------------------------------

    /*  Operadores de Comparacion:

        ==      Igual       "Solo valor"
        ===     Identico    "Valor y tipo de dato"
        !=, <>  Diferente
        >       Mayor que...
        <       Menor que...
        >=      Mayor igual que...
        <=      Menor igual que...

    */

    if ($numero === '10') {
        echo 'Es identico' . '<br>';
    } else {
        echo 'Es Diferente' . '<br>';
    }

    #--------------------------------------------------

    /*  Operadores Lògicos

        and, &&
        or, ||      
        xor         Cumple solo una condicion
        !           Negacion

    */
    
    $numero2 = 5;
    if ($numero == 10 && $numero2 ==5) {
        echo 'Ejecuta' . '<br>';
    }

    #--------------------------------------------------

    /*  Operadores de Incremento / Decremento

        ++$x
        $x++
        --$x
        $x--

    */

    $numero++;
    echo --$numero  . '<br>';

    #--------------------------------------------------

    /*  Operadores de Cadenas

        .   Concatenar
        .=  $texto = $texto . "Cadena de texto"

    */

    $texto = 'Cadena de texto';
    $texto .= 'Cadena de texto';
    $texto2 = 'Una segunda Cadena de texto';

    $texto3 = $texto . $texto2;
    echo $texto3;

?>