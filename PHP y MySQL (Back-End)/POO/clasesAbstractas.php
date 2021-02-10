<?php 

#No se puede acceder a una clase a menos que la heredemos
#Indica que es una clase padre
abstract class Persona{
    public function saludo(){
        return 'Hola';
    }
}

class Estudiante extends Persona{

}

$angel = new Estudiante;
echo $angel->saludo();