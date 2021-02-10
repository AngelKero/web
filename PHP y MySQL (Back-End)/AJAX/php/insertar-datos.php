<?php 
error_reporting(0);
header('Content-type: aplication/json; charset=utf-8');

//Declaracion de varibles que se reciban por POST
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

//Funcion que valide los datos
function validarDatos($nombre, $edad, $pais, $correo){
    if ($nombre == '') {
        return false;
    } elseif ($edad == ''|| is_int($edad)) {
        return false;
    } elseif ($pais == '') {
        return false;
    } elseif ($correo == '') {
        return false;
    }

    return true;
}

//Se valida que los datos sean correctos
if (validarDatos($nombre, $edad, $pais, $correo)) {
    $conexion = new mysqli('localhost', 'root', '', 'ajax');
    $conexion->set_charset("utf8");
    //Si hay un error de conexion, se manda un error
    if($conexion->connect_errno){
        $respuesta = [
            'error' => true
        ];
    } else{//Si no hay error de conexion, se insertan los datos
        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?,?,?,?)");
        $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
        $statement->execute();

        //Se manda un error si es que no se insertaron los datos
        if ($conexion->affected_rows <= 0) {
            $respuesta = [
                'error' => true
            ];
        }else{
            $respuesta = [];
        }
    }
} else{//Si los datos no son correctos se manda un error
    $respuesta = [
        'error' => true
    ];
}

echo json_encode($respuesta);