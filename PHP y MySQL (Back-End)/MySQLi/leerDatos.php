<?php 

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('No se puede conectar');
} else{
    $id = $_GET['id'] ?? 1;
    #Se guarda una variable con la query a ejecutar
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    #Se pasa como consulta la query a ejecutar
    #Si devuelve resultados se guarda en resultados
    $resultados = $conexion->query($sql);

    # Comprueba que haya datos
    if($resultados->num_rows){
        // echo '<pre>';
        // var_dump( $resultados->fetch_assoc());
        // var_dump( $resultados->fetch_assoc());
        // echo '</pre>';
        // echo $resultados->fetch_assoc()['nombre'];
        
        # Se guarda en un array los datos y se mueve el puntero en la tabla
        # Si el siguiente puntero ya no hay datos, arroja null
        while($fila = $resultados->fetch_assoc()){
            echo $fila['Id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['edad'] . '<br>';
        }
    } else {
        echo 'No hay datos';
    }
}
