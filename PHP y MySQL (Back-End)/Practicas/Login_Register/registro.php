<?php session_start();//Inicia la sesion

if (isset($_SESSION['usuario'])) {//Si hay una sesion activa, se envia al contenido
    header('location: index.php');
}

#-------Se obtienen los datos del formulario cuando se mandan por POST--------->
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//Se enviaron datos por post
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); 
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';//String para guardar los errores generados

    #--------Se comprueba que ningun dato este vacio---------------->
    if(empty($usuario) or empty($password) or empty($password2)){
        $errores .= '<li>Por favor rellena todos los datos</li>';
    } else{ // Si no se valida el formulario
        #---------------Se conecta a la base de datos---------------->
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=login_register', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        #--------Se comprueba que el usuario ingresado no exista------------>
        $statement = $conexion->prepare('SELECT * FROM users WHERE username = :usuario LIMIT 1');
        $statement->execute([':usuario' => $usuario]);
        $resultado = $statement->fetch();
        if($resultado != false){//Si la consulta no arroja nada guarda false
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }

        #-----------Se hashean las contraseñas para hacerlas mas seguras----------->
        $password = hash('sha512', '$password');
        $password2 = hash('sha512', '$password2');

        #----------Se comprueba que las contraseñas no sean iguales------------->
        if($password == $password2){
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }

    #-------------Si no hay ningun error se registra al usuario----------->
    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO users (username, pass) VALUES (:usuario, :pass)');
        $statement->execute([
            ':usuario' => $usuario, 
            ':pass' => $password
        ]);

        #Si todo fue correcto se redirige al login
        header('Location: login.php');
    }
         
}

require 'views/registro.view.php';