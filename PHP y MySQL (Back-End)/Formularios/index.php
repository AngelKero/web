<?php 

    if ($_POST) {
        echo $_POST['nombre'];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Te trae la ruta del archivo actual -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="" id="" class="">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre:">

        <br><br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">

        <br><br>
        <select name="year" id="year">
            <?php 
                for ($i=1990; $i <= 2020; $i++) { 
                    print '<option value="' . $i . '">' . $i . '</option>';
                }
            ?>
        </select>

        <br><br>
        <label for="terminos">Aceptar</label>
        <input type="checkbox" name="terminos" id="terminos" value="true">
                
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>