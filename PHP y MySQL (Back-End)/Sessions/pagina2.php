<?php 
    #Las sessions guardan un archivo con valores mientras este abierto el navegador
    #Se borrar cuando se cierra

    #Se necita inicar en cada pagina que se vaya a usar
    session_start();

    if ($_SESSION) {
        #Se accede al valor guardado
        $nombre = $_SESSION['nombre'];
        echo "<h1>Hola, $nombre </h1><br>";

        echo '<pre>' . print_r($_SESSION) . '</pre>';
    } else {
        echo "No has iniciado sesion <br>";
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <a href="cerrar.php">Cerrar Sesion</a>
</body>
</html>