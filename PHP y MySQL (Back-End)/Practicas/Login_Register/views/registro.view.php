<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b192e847c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>

        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fas fa-user"></i><input type="text" name="usuario" id="usuario" class="usuario" placeholder="Usuario:">
            </div>
            
            <div class="form-group">
                <i class="icono izquierda fas fa-unlock"></i><input type="password" name="password" id="password" class="password" placeholder="Contraseña:">
            </div>

            <div class="form-group">
                <i class="icono izquierda fas fa-unlock"></i><input type="password" name="password2" id="password" class="password_btn" placeholder="Repitir Contraseña:">
                <i class="submit-btn fas fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <!-- Si hay errores -->
            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <!-- Se imprimen -->
                        <?php echo $errores ?>
                    </ul>
                </div>
            <?php endif ?>
        </form>

        <p class="texto-registrate">
            ¿ Ya tienes Cuenta ?
            <a href="login.php">Iniciar Sesion</a>
        </p>
    </div>
</body>
</html>