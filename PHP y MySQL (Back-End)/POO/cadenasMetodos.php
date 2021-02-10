<?php 

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: ' . $this->nombre . '<br>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Su correo es: ' . $this->correo . '<br>';
        return $this;
    }
}

$angel = new Usuario('Angel', 'zangelweb@gmail.com');
#Se pueden encadenar sin tner que repetir codigo
$angel->mostrarNombre()->mostrarCorreo();
