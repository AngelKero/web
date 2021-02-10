<?php 
    $meses =    [
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    $alex = [   
        'telefono' => '3325094748', 
        'edad' => 25, 
        'apellido' => 'Zaragoza', 
        'pais' => 'Mexico'
    ];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php 
            #Arreglos indexados
            foreach ($meses as $mes) {
                echo '<li>' . $mes . '</li>';
            }

            echo '<br>';
            #Arreglos asociativos
            foreach ($alex as $dato => $valor) {
                echo '<li>' . $dato . ': ' . $valor . '</li>';   
            }
        ?>
    </ul>
</body>
</html>