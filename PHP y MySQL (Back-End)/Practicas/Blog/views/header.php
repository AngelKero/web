<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b192e847c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo RUTA ?>css/master.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA ?>">Mi segundo Blog</a></p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar:">
                    <button type="submit" class="icono fas fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#">Contacto <i class="fas fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>