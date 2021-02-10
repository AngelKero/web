// Accediendo a los elementos
// Por su etiqueta
var cajas = document.getElementsByTagName('div');
// Por su clase
var cajas2 = document.getElementsByClassName('caja');
// Por su id
var caja1 = document.getElementById('caja1');

// Cambiando Texto de un Nodo
cajas[1].textContent = 'Hola Mundo!';
cajas[2].innerHTML = '<u>Hola</u>';
cajas2[3].textContent = 'XD';
// Por su id
caja1.textContent = 'Caja Uno';


// Creando Nodos
// 1.- Crear el elemento
var caja = document.createElement('div');
// 2.- Crear un nodo de texto
var contenido = document.createTextNode('Caja Agregada');
// 3.- Añadir el nodo de texto al alemento
caja.appendChild(contenido);
// 4.- Agregar atributos al elemento
caja.setAttribute('class', 'caja naranja');

// 5.-Agregar elemento al documento - <!!agrega al ultimo!!>
var contenedor = document.getElementById('contenedor');
contenedor.appendChild(caja);


// Modificando la clase o id de un elemento
caja.id = 'cajaAuto';
caja.className = 'caja naranja';

// Conocer el elemento padre de un elemento
var padre = cajas[0].parentNode;
console.log(padre);

// Insertar un elemento en una posicion Expecifica
padre.insertBefore(caja, cajas[2]);// Elemento a insertar - Elemento donde se insertara antes


// Remplazando elementos por otros, se elimina el remplazado pero el remplazador no
padre.replaceChild(caja, cajas[1]);

//Elimnar elemento de un nodo
padre.removeChild(cajas[3]);