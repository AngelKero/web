<?php 

echo 5 <=> 1;

# Regresa 1 si el valor de la izquierda es mayor que el de la derecha
# Regresa 0 si los valores en ambos lados son iguales
# Regresa -1 si el valor de la derecha es mayor que el de la izquierda

//  <   =   >
//  1   0   -1



echo '<br>';
echo 10 <=> 1;

echo '<br>';
echo 1 <=> 10;



echo '<br>';
$arreglo = [
    3,1,5,2,4
];
function comparar($a, $b){
    return $a <=> $b;
}
usort($arreglo, 'comparar');

echo implode(' - ', $arreglo);