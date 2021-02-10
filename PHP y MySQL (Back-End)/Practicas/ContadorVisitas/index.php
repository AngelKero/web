<?php 

function contar_usuarios(){
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        #Se obtiene la cuenta del archivo y se suma 1
        $cuenta = file_get_contents($archivo) + 1;
        #Se sobreescribe el archivo con la cuenta nueva
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else{
        #Si no existe el archivo se crea y se escribe la cuenta desde 1
        file_put_contents($archivo, 1);
        return 1;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <h1>Contador de visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitas</p>
    </div>
</body>
</html>