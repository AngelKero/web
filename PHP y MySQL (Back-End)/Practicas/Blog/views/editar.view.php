<?php require_once '../views/header.php' ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="formulario" enctype="multipart/form-data">
                    <input type="hidden" name="Id" value="<?php echo $articulo['Id'] ?>">
                    <input type="text" name="titulo" id="titulo" value="<?php echo $articulo['titulo'] ?>">
                    <input type="text" name="extracto" id="extracto" value="<?php echo $articulo['extracto'] ?>">
                    <textarea name="texto" placeholder="Texto del Articulo:"><?php echo $articulo['articulo'] ?></textarea>
                    <input type="file" name="thumb" id="thumb">
                    <input type="hidden" name="thumb-guardada" value="<?php echo $articulo['thumb'] ?>">

                    <input type="submit" value="Modificar Articulo">
                </form>
            </article>
        </div>
    </div>
<?php require_once '../views/footer.php' ?>