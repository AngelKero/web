<?php 
    $meses =    [
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    for($i = 0; $i < count($meses); $i++){
        echo $meses[$i] . '<br>';
    }

    echo '<br>';
    $contador = 0;

    while($contador < count($meses)){
        echo $meses[$contador] . '<br>';
        $contador++;
    }
?>