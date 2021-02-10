<?php 
    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';
    # Los valores del formulario se guardan dentro de: :POST
    # POST no envia datos por la url
    # Usarlo solo cuando se quiere modificar DB

    // if ($_POST) {//Se verifica que haya valores dentro de _POST

    //     $nombre = $_POST['nombre'];
    //     $sexo = $_POST['sexo'];
    //     $year = $_POST['year'];
    //     $terminos = $_POST['terminos'];
    
    
    //     echo 'Hola, ' . $nombre . '. Eres: ' . $sexo;

    // } else{ //Si no redirige al usuario
    //     header('Location: http://localhost/cursoPHP/Formularios/index.php');
    // }


    
    # GET envia datos por la url
    # Usarlo solo cuando se quiere mostrar informacion
    echo '<pre>';
        print_r($_GET);
    echo '</pre>';
    
    if ($_GET) {//Se verifica que haya valores dentro de _GET

        $nombre = $_GET['nombre'];
        $sexo = $_GET['sexo'];
        $year = $_GET['year'];
        $terminos = $_GET['terminos'];
    
        echo 'Hola, ' . $nombre . '. Eres ' . $sexo;
    } else{ //Si no redirige al usuario
        header('Location: http://localhost/cursoPHP/Formularios/index.php');
    }
?>