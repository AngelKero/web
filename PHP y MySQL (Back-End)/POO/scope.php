<?php 

class Usuario{
    private $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this->correo = $correo;
        $this->nombre = $nombre;
    }

    public function mostrarInfo(){
        return $this->nombre;
    }
}

class Miembro extends Usuario{
    public function mostrarCorreo(){
        #Puede acceder a correo en protected
        return $this->correo;
    }
}

$angel = new Miembro('Angel', 'zangelweb@gmail.com');
echo $angel->mostrarCorreo();

#No puede acceder desde afuera solo desde dentro de la clase hererada
// echo $angel->correo;

// Public
// Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase.

// Protected
// Pueden ser accedidos desde dentro de la clase y otras clases que heredaron. Pero no fuera de estas.

// Private
// Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
// Es decir que no podemos acceder a ellos desde otra clase que heredo y tampoco podemos acceder desde fuera de las clases.
