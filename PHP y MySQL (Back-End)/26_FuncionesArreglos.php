<?php 
   $amigo = [
       'telefono' => 3325094748,
       'edad'     => 20,
       'pais'     => 'Mexico'
   ];
   # Extrae los indices asociativos en variables
   extract($amigo);
   echo $telefono . '<br>';



   $semana = [
       'Lunes', 'Martes', 'Miercoles', 'Jueves',
       'Viernes', 'Sabado', 'Domingo'
   ];
   #Elimina el ultimo arreglo y lo devuelve
   $ultimodia = array_pop($semana);
   foreach ($semana as $dia ) {
       echo $dia . '<br>';
   }
   echo '<b>'. $ultimodia . '</b>' . '<br>';



   #Te devulve en una cadena el array con lo que se indique en medio
   echo join(' - ', $semana) . '<br>';



   #Te devuelve el numero de arreglos
   echo count($semana) . '<br>';



   #Invierte el orden del arreglo
   $rsemana = array_reverse($semana);
   echo join(', ', $rsemana) . '<br>';



   sort($semana);
   echo join(', ', $semana) . '<br>';



   rsort($semana);
   echo join(', ', $semana) . '<br>';


    /* Todas las funciones en php
        https://www.php.net/manual/es/ref.array.php
    */
?>