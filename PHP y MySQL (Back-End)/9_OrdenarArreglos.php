<?php 
    $meses =    [
                    'Enero', 'Febrero', 'Marzo', 'Abril',
                    'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ];

    $numeros =  [
                    1,22,23,10,9,5,70,100,20
    ];

    #Ordenar por forma alfabetica A-Z
    sort($numeros);
    #Ordenar por forma alfabetica Z-A
    rsort($meses);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año.</h1>
    <ul>
        <?php 
            foreach ($meses as $mes) {
                print '<li>' . $mes . '</li>';
            }
            foreach ($numeros as $numero) {
                print '<li>' . $numero . '</li>';
            }
        ?>
    </ul>
</body>
</html>