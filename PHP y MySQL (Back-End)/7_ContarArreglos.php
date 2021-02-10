<?php 
    $meses =    [
                    'Enero', 'Febrero', 'Marzo', 'Abril',
                    'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ];

    //echo count($meses);
    $ultimoMes = count($meses) - 1;
    echo $meses[$ultimoMes];
?>