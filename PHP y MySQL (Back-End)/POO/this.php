<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInfo(){
        //Selecciona la variable de esta clase
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br>';
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
$alejandro->mostrarInfo();
