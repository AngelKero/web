<?php 

header('Content-type: aplication/json; charset=utf-8');

$respuesta = [
    [
        'id' => 'jhdsb67dfsbfs6d78',
        'nombre' => 'Angel',
        'edad' => 20,
        'pais'=> 'Mexico',
        'correo' => 'correo@correo.com'
    ],
    [
        'id' => 'hbsdr378b8f',
        'nombre' => 'Alejandro',
        'edad' => 24,
        'pais'=> 'España',
        'correo' => 'correo234@correo.com'
    ]
];
// echo '<pre>';
// var_dump($respuesta);
// echo '</pre>';

echo json_encode($respuesta);