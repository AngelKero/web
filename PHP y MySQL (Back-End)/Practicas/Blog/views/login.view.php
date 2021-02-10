<?php require_once 'header.php' ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sesiòn</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="formulario">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario:">
                    <input type="password" name="password" id="password" placeholder="Contraseña:">
                    <input type="submit" value="Iniciar Sesiòn">
                </form>
            </article>
        </div>
    </div>
<?php require_once 'footer.php' ?>