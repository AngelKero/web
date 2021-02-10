<?php 
error_reporting(0);
header('Content-type: aplication/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', '', 'ajax');
//Si hay un error se manda un error
if($conexion->connect_errno){
    $respuesta = [
        'error' => true
    ];
} else{
    $conexion->set_charset("utf8");
    //Se traen todos los usuarios
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();
    //Se guardan los resultados
    $resultados = $statement->get_result();
    //Se crea la respuesta
    $respuesta = [];
    //Se guarda en fila cada usuario que vaya recorriendo el fetch
    while($fila = $resultados->fetch_assoc()){
        //Se crea un arreglo que guarde la informacion de cada usuario
        $usuario = [
            'id'        => $fila['ID'],
            'nombre'    => $fila['nombre'],
            'edad'      => $fila['edad'],
            'pais'      => $fila['pais'],
            'correo'    => $fila['correo'],
        ];
        //Cada que se recorra un usuario se inserta el nuevo arreglo
        array_push($respuesta, $usuario);
    }
}
//Se envia la respuesta y se transforma en archivo json
echo json_encode($respuesta);