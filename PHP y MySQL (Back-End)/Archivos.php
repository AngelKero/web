<?php 

#Se comprueba que el archivo exista
// if (file_exists('documento.txt')) {
//     echo "El archivo si existe";
// } else{
//     echo "El archivo no existe";
// }

# se obtiene la informacion del archivo
// echo file_get_contents('documento.txt');

#Se escribe sobre el archivo, nombre documento, valores a agregar, Sobreescribir sobre lo que hay sin borrarlo
// file_put_contents('documento.txt', "Hola Mundo!!\n", FILE_APPEND);// Quitar fileappend para borrar y sobreescribir

file_put_contents('documento.txt', '');

for ($i=1; $i <= 10; $i++) { 
    file_put_contents('Documento.txt', "$i \n", FILE_APPEND);
}


$archivo = file('documento.txt');
// echo '<pre>';
// print_r($archivo);

echo $archivo[7];