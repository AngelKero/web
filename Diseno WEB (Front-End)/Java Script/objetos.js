// Los objetos pueden contener propiedades (variables), y metodos (funciones)
var angel = {
    Nombre: 'Angel',
    Edad: 20,
    Pais: 'Mexico',
    bio: function(){
        return this.Nombre + ' tiene ' + this.Edad + ' años.';
    }
};

var carlos = {
    Nombre: 'Carlos',
    Edad: 19,
    Pais: 'España',
    bio: function(){
        return this.Nombre + ' tiene ' + this.Edad + ' años.';
    }
}

document.write(angel.bio() + '<br>');
document.write(carlos.bio() + '<br>');


// ----- ----- ----- ----- ----- ----- ----- ----- 
// Usando un constructor de Objetos
// El constructor de objetos nos permite crear objetos conforme los necesitemos.
// En vez de escribirlos al inicio.

function persona(Nombre, Edad, Pais){
    this.Nombre = Nombre;
    this.Edad = Edad;
    this.Pais = Pais;
    //Agregar un metodos
    this.bio = function() {
        return this.Nombre + ' tiene ' + this.Edad + ' años y vive en ' + this.Pais;
    }
}

var ricardo = new persona('Ricardo', 18, 'Mexico');
document.write(ricardo.bio());
