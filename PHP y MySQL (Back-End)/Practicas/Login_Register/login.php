<?php session_start();//Inicia la sesion

if (isset($_SESSION['usuario'])) {//Si hay una sesion activa, se envia al contenido
    header('location: index.php');
}

$errores = '';

#-------Se obtienen los datos del formulario cuando se mandan por POST--------->
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//Se enviaron datos por post
    #Se guardan los datos
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); 
    $password = $_POST['password'];
    #Se hashea la contraseña
    $password = hash('sha512', '$password');
    #Se conecta a la base de datos
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=login_register', 'root', '');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    #Se consulta si hay un usuario y contraseña iguales a los enviados
    $statement = $conexion->prepare('SELECT * FROM users WHERE username = :usuario AND pass = :password');
    $statement->execute([':usuario' => $usuario,':password' => $password]);
    #Se guarda el resultado
    $resultado = $statement->fetch();
    #Si no devolvio algo se crea la sesion
    if ($resultado != false) {
        $_SESSION['usuario'] = $usuario;
        #Se redirige al index que decidira a donde enviar al usuario
        header('Location: index.php');
    } else{
        $errores .= '<li>Datos Incorrectos</li>';
    }
}

require 'views/login.view.php';