<?php 

// echo pathinfo('documento.txt', PATHINFO_BASENAME);

// echo pathinfo('usuario/carpeta/documento.txt', PATHINFO_DIRNAME);

// echo pathinfo('documento.txt', PATHINFO_EXTENSION);

// echo pathinfo('documento.txt', PATHINFO_FILENAME);
	// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
    // * PATHINFO_FILENAME // Devuelve el nombre del archivo
    

#Te devuelve en un arreglo todos los archivos que se indiquen con una consulta
// $resultados = glob('practicas/*.{php,html,txt}', GLOB_BRACE);
// echo '<pre>';
// print_r($resultados);

#Devuelve el nombre del archivo con su extension
// echo basename('carpeta1/carpeta2/archivo.php', '.php');
#Devuelve el directorio padre del archivo
// echo dirname('carpeta1/carpeta2/archivo.php');