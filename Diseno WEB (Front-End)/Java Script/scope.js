//Hay variables de tipo local y global

// ----- Variable local
// Las variables locales son las que han sido creadas 
// dentro de una funcion o una funcion anidada (una funcion dentro de otra).
function saludo() {
    var texto = 'Hola Mundo!';
    console.log(texto);
}

// ----- Variable local con funciones anidadas
// El scope funciona por niveles, si no 
//encuentra una variable en el mismo nivel subira de nivel hacia afuera 
//y buscara. Si no encuentra subira otro nivel y asi sucesivamente.

// Si tenemos una funcion anidada (una funcion dentro de otra)
// podemos buscar variables desde dentro hacia afuera, pero desde una 
// funcion no podemos buscar variables hacia dentro de otra funcion.
function saludo2() {
    var texto = 'Hola Mundo!';
    
    function mensaje() {
        var texto = 'Modificado!';
        console.log(texto);
    }

    mensaje();
}

// ----- Variable Global
// Las variables globales pueden ser accedidas desde cualquier parte 
//del codigo, incluyendo cualquier funcion.

var texto = 'hola mundo!';

function saludo3() {
    console.log(texto);

    texto = 'hola mundo, modificado!';
    console.log(texto);
}

// ----- IMPORTANTE:
// Si una variable se declara fuera es global. Pero las variables dentro 
// de una funcion pueden ser globales tambien.

// Si dentro de la funcion declaramos una variable mediante la palabra "var" 
// sera local. Pero si no le ponemos "var" sera global.

function saludo3() {
    mensaje = 'hola mundo!';
}

saludo3();
console.log(mensaje);

// ----- Como proteger nuestras variables de codigo de terceros.
// Podemos proteger nuestro codigo con una funcion autoinvocada.
// Esto gracias a que todo lo que este fuera de esta funcion no 
// va a poder acceder a nuestras variables que esten dentro.

(function(){
    alert('hola');
    //todo tu codigo
}())