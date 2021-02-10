<?php require_once 'header.php'; ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $articulo['titulo'] ?></h2>
                <p class="fecha"><?php echo fecha($articulo['fecha']); ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA . $blog_config['rutaImagenes'] . $articulo['thumb'] ?>" alt="<?php echo $articulo['titulo'] ?>">
                </div>
                <p class="texto"><?php echo nl2br($articulo['articulo']) ?></p>
            </article>
        </div>
    </div>
<?php require_once 'footer.php' ?>