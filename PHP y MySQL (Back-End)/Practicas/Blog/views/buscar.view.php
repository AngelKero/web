<?php require_once 'header.php' ?>
    <div class="contenedor">
        <h2><?php echo $titulo ?></h2>
        <?php foreach($articulos as $articulo): ?>
        <div class="post">
            <article>
                <h2 class="titulo">
                    <a href="single.php?id=<?php echo $articulo['Id'] ?>"><?php echo $articulo['titulo'] ?></a>
                </h2>
                <p class="fecha"><?php echo fecha($articulo['fecha']); ?></p>
                <div class="thumb">
                    <a href="single.php?id=<?php echo $articulo['Id'] ?>">
                        <img src="<?php echo RUTA . $blog_config['rutaImagenes'] . $articulo['thumb'] ?>" alt="<?php echo $articulo['titulo'] ?>">
                    </a>
                </div>

                <p class="extracto"><?php echo $articulo['extracto'] ?></p>
                <a href="single.php?id=<?php echo $articulo['Id'] ?>" class="continuar">Continuar Leyendo</a>
            </article>
        </div>
        <?php endforeach ?>
    </div>
<?php require_once 'footer.php' ?>