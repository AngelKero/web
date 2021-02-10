<?php 

$id = $_GET['id'] ?? 1;

try {
    #Se crea la conexion creando un objeto
    #parametro1: base de datos, direccion del host, nombre base de datos
    #parametro2: usuario; parametro3: contraseña
    $conexion = new PDO('mysql:host=localhost;dbname=pruebadatos', 'root', '');
    // echo "Conexion OK<br>";

    #Insertar valores
    // $conexion->query('INSERT INTO usuarios VALUES(null, "Carlos")');



    #-------- Metodo query -------------->
    // /* Solo usar query sin insertar variables dentro */
    # Se llama al metodo query y se guarda en un arreglo asociativo
    // $resultados = $conexion->query("SELECT * FROM usuarios WHERE Id = $id");

    #Para mostrar los datos
    // foreach ($resultados as $fila ) {
    //     // echo "<pre>";
    //     // print_r($fila);
    //     // echo "</pre>";
    //     echo $fila['Id'] . ' - ' . $fila['nombre'] . '<br>';
    // }



    #------------- prepared statements ------------------>
    #se prepara la consulta
    #-------------------------------------- se crea un placeholder
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id or id = :id2');
    // $statement = $conexion->prepare("INSERT INTO usuarios VALUES(null, 'Jose')");
    $statement->execute([
        ':id' => $id,    //Se sustituye el placeholder por la variable
        ':id2' => 3
        ]);
    # Se guarda en un array los resultados
    $resultados = $statement->fetchAll();//fetch solo guarda un valor - fetchAll todos
    // echo "<pre>";
    // print_r($resultados);
    // echo "</pre>";
    foreach ($resultados as $usuario) {
            echo $usuario['nombre'] . '<br>';
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>