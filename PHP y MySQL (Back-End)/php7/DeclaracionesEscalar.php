<?php 

declare(strict_types = 1); //declaras que sea estricto
function cuadrado(int $n){ //daclaras el tipo de parametro a pasar
    return $n * $n;
}

$n = '8s'; // php trata de convertir a numero
echo 'El cuadrado de: ' . $n . ' es ' . cuadrado($n);

#No se cerro la etiqueta php