<?php 

class Persona{
    public static $dia = '21 de septiembre';

    public static function saludo($nombre = null){
        if ($nombre) {
            return 'Hola '. $nombre;
        } else {
            return 'Hola';
        }
    }
}

#Estatic sirve para poder acceder a propiedades sin instanciar un objeto
echo Persona::saludo('Angel');
