<?php 
    #Se necita inicar en cada pagina que se vaya a usar
    session_start();
    #Se accede a la variable super global, le das un nombre y un valor
    $_SESSION['nombre'] = 'Angel';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>