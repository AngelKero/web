<?php require_once '../views/header.php' ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="formulario" enctype="multipart/form-data">
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo del articulo:">
                    <input type="text" name="extracto" id="extracto" placeholder="Extracto del articulo:">
                    <textarea name="texto" placeholder="Texto del Articulo:"></textarea>
                    <input type="file" name="thumb" id="thumb">

                    <input type="submit" value="Crear Articulo">
                </form>
            </article>
        </div>
    </div>
<?php require_once '../views/footer.php' ?>