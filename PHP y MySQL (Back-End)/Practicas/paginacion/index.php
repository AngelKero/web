<?php 

try {
    # Conexion base de datos
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
    #Se obtiene la paginacion del GET['pagina] en enteros si no sera 1
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;


    $postPagina = 5; //Se configura las paginas a mostrar
    #Se hace una operacion para calcular el inicio de los post a cargar
    $inicio = ($pagina > 1) ? ($pagina * $postPagina - $postPagina) : 0;

    # Se guarda todas las filas encontradas con SQL_CACL_FOUND_ROWS
    $sql = "SELECT SQL_CALC_FOUND_ROWS *
            FROM articulos 
            LIMIT $inicio, $postPagina";
    $statement = $conexion->prepare($sql);
    $statement->execute();

    $articulos = $statement->fetchAll();
    // echo "<pre>";
    // print_r($articulos);
    // echo "</pre>";
    if (!$articulos) {//Si no hay articulo se vuelve al inicio
        header('Location: index.php');
    }

    #Se consulta todos los articulos encontrados y se guarda como total
    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
    $totalArticulos = $totalArticulos->fetch()['total'];

    #Calculamos el numero de paginas totales y se redondea el numero
    $numeroPaginas = ceil($totalArticulos / $postPagina);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

require 'index.view.php';