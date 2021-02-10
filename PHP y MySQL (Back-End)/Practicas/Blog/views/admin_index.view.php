<?php require_once '../views/header.php' ?>
    <div class="contenedor">
    <h2>Panel de Control</h2>
    <a href="nuevo.php" class="btn">Nuevo Post</a>
    <a href="cerrar.php" class="btn">Cerrar Sesion</a>
        <?php foreach($articulos as $articulo): ?>
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $articulo['Id'] . '.- ' . $articulo['titulo'] ?></h2>
                <a href="editar.php?id=<?php echo $articulo['Id'] ?>">Editar</a>
                <a href="../single.php?id=<?php echo $articulo['Id'] ?>">Ver</a>
                <a href="borrar.php?id=<?php echo $articulo['Id'] ?>">Borrar</a>
            </article>
        </div>
        <?php endforeach ?>
        
        <?php require_once '../views/paginacion.php' ?>
    </div>
<?php require_once '../views/footer.php' ?>