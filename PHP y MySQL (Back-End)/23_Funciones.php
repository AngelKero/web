<?php 
    // count();
    // sort();
    // rsort();
    // var_dump();
    // print_r();

    function saludo($nombre){
        return 'Saludos ' . $nombre . '<br>';
    }

    function sumar($n1, $n2){
        $r = $n1 + $n2;
        return $r;
    }

    echo saludo('Angel');
    echo saludo('Manuel');
    echo saludo('Carlos');

    $resultado = sumar(4,7);
    echo $resultado;
?>