<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginacion</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo): ?>
                    <li><?php print $articulo['Id'] . '.- ' .$articulo['articulo']; ?></li>
                <?php endforeach ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Se deshabilita el boton de avance cuando la paginacion es la primera -->
                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li class=""><a href="?pagina=<?php echo $pagina - 1?>">&laquo;</a></li>
                <?php endif ?>

                <!-- Se agregara la clase active cuando el boton es la pagina actual -->
                <?php 
                    for ($i=1; $i <= $numeroPaginas; $i++) {//Se accede a todos los articulos
                        if ($pagina == $i) {
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        } else {
                            echo "<li class=''><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>

                <!-- Si esta en la ultima pagina el boton de retroceso se deshabilitara-->
                <?php if($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li class=""><a href="?pagina=<?php echo $pagina + 1?>">&raquo;</a></li>
                <?php endif ?>
            </ul>
        </section>
    </div>
</body>
</html>