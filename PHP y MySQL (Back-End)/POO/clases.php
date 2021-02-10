<?php 
    class Persona{
        public $nombre;
        public $edad;
        public $pais;
        
        public function mostrarInfo(){
            echo 'Hola mundo! <br>';
        }
    }
    
    $carlos = new Persona;
    $carlos->nombre = 'Carlos';
    $carlos->edad = 23;
    $carlos->pais = 'Mexico';
    
    $carlos->mostrarInfo();
    
    $alejandro = new Persona;
    $alejandro->nombre = 'Alejandro';
    $alejandro->edad = 30;
    $alejandro->pais = 'España';
    
    echo $alejandro->nombre . ' tiene ' . $alejandro->edad . ' años de edad.';

    #Sin POO
    // $nombre = 'Angel';
    // $edad = 23;
    // $pais = 'Mexico';

    // $nombre2 = 'Alejandro';
    // $edad2 = 30;
    // $pais2 = 'España';

    // $nombre3 = 'Cesar';

    // echo $nombre;


    #La clase es una plantilla con atributos y metodos