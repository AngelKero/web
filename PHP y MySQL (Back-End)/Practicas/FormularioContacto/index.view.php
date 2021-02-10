<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <!-- <div class="alert error">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, velit?
            </div>

            <div class="alert success">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, voluptate.
            </div> -->

            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif; ?>

            <input type="submit" value="Enviar Correo" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
