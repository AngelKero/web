<?php 
    $numero = 7;

    # No se puede acceder a variables fuera de una funciòn
    function mostrarNumero($numero){
        echo $numero . '<br>';
    }

    function mostrarNumero2(){
        $numero2 = 8;
        return $numero2;
    }

    mostrarNumero($numero);

    #No se puede acceder a una variable dentro de una funcion
    //echo $numero2;
    echo mostrarNumero2();
?>