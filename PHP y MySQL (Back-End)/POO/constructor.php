<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    #Este metodo se ejecuta una vez cuando se instancia un objeto
    function __construct($nombre, $edad, $pais){
        //El atributo de la clase sera igual al del parametro del metodo
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInfo(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br>';
    }
}

$angel = new Persona('Angel', 23, 'Mexico');
$angel->mostrarInfo();

$alejandro = new Persona('Alejandro', 30, 'España');
$alejandro->mostrarInfo();
