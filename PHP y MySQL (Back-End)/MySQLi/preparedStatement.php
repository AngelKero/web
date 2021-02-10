<?php 

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){//Hay un error de conexion
    die('No se puede conectar');
} else{
    # se guarda el statement ejecutando el metodo prepare de la conexion
    $statement = $conexion->prepare("INSERT INTO usuarios (Id,nombre,edad) VALUES (?, ?, ?)");
    # Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double
    $statement->bind_param('ssi', $id, $nombre, $edad);

    #Le damos los valores a las variables
    $id = NULL;
    #Comprobamos que se hayan declarado las variables por la URL
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    #Se ejecuta el statement y se modifica la DB
    $statement->execute();

    // echo 'Filas añadidas:' . $conexion->affected_rows;

    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    } else {
        echo 'No se ha añadido nada';
    }
}
