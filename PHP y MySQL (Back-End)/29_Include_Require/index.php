<?php 
    function suma($n1, $n2){
        return $n1 + $n2;
    }

    #Incluye archivos
    require 'view.php'; // USar para archivos importantes
    include_once 'view.php'; // Usar para archivos no tan inportantes como vistas
    /* include te permite seguir ejecutando codigo
        require no.
    */

    # El "_once" evita que se ejecute mas de una vez


    echo '<b>Hola</b>';
?>
