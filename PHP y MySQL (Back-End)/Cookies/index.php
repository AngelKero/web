<?php 
    #La cookie es un archivo que guarda en pc y se accede en cualquier momento
    #Nombre de la cookie - Valor a guardar - Tiempo de expiracion - Ruta guardado
    #"/" para guardar en principal
    #Para borrarla solo se necisita settiarla en un tiempo expirado
    setcookie('font-size', '40px', time() + 60 * 60 * 24 *30, '/'); //Se settea
    setcookie('font-size', '40px', time() + 60 * 60 * 24 *30, '/'); //Se borra
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Setted</h1>
    <a href="texto.php">Ir a texto</a>
</body>
</html>