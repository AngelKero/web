<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;
    public $texto = "Primer texto";

    #Este metodo se ejecuta una vez cuando se instancia un objeto
    function __construct($nombre, $edad, $pais){
        //El atributo de la clase sera igual al del parametro del metodo
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInfo(){
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br>';
    }
}

#La herencia trae las propiedades y metodos a otra
class Estudiante extends Persona{//Estudiante hereda de Persona
    #Se sobreescribe las propiedades de la clase hererada
    public $texto = "Hola Mundo";
    #Se agregan nuevos atributos
    public $carrera;

    function __construct($nombre, $edad, $pais, $carrera){
        #Traer propiedades de la clase hererada
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

// Clase Trabajador
class Trabajador extends Persona{
    public $trabajo;
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$angel = new Trabajador('Angel', 23, 'Mexico', 'Profesor');
echo $angel->trabajo;

#Forma sin herencia
// class Estudiante{
//     public $nombre;
//     public $edad;
//     public $pais;
//     public $carrera;

//     function __construct($nombre, $edad, $pais, $carrera){
//         //El atributo de la clase sera igual al del parametro del metodo
//         $this->nombre = $nombre;
//         $this->edad = $edad;
//         $this->pais = $pais;
//         $this->carrera = $carrera;
//     }

//     public function mostrarInfo(){
//         return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais. '<br>';
//     }
// }

