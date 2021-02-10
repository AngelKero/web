/*var a = 5;
var b = 10;
var c = a + b;

document.write(c);*/

function suma(a, b) {
    document.write('<br>');
    return a + b;
}

// ----- Segunda forma de nombrar funciones
var sumar = function(a, b){
    return a + b;
}


// ----- Funciones autoinvocadas
	// Son funciones que se ejecutan automaticamente.
    // Muchas veces las vamos a utilizar para proteger 
    // nuestro codigo y que codigo de terceros no acceda a nuestras variables, funciones, etc.
        
    (function() {
        alert('Hola Mundo!');
    }());

document.write(suma(5,10));
document.write(suma(8,4));
document.write(suma(23,11));