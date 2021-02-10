<?php 
    #Se hace la conexion y se guarda en una variable
    $conexion = mysql_connect('localhost', 'root', '') or die('No se puede conectar');
    #Se selecciona la base de datos y la conexxion
    mysql_select_db('pruebadatos', $conexion);
    #Se hace una consulta y se guarda
    $resultado = mysql_query('SELECT * FROM usuarios');

    #Cada que se llama la funcion se mueve el puntero de la tabla
    #La colsulta se transforma en un objeto
    // $fila = mysql_fetch_object($resultado);
    // #Se muestra un atributo del objeto
    // echo $fila->nombre;

    // $fila = mysql_fetch_object($resultado);
    // echo $fila->nombre;


    while($fila = mysql_fetch_object($resultado)){
        echo $fila->nombre;
        echo '<br>';
    }

    /* Esta forma de conectarse ya no funciona en php7 */
?>