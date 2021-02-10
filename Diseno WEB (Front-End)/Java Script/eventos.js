//Documentacion de todos los eventos https://developer.mozilla.org/en-US/docs/Web/Events

var btnCaja = document.getElementById('btn_CrearCaja');
btnCaja.addEventListener('click', crearCaja);

function crearCaja() {
    var contenedor = document.getElementById('contenedor');
    var caja = document.createElement('div');
    caja.className = 'caja';
    contenedor.appendChild(caja);
}

/* Exixten 3 modelos de eventos diferentes:
			- Modelo basico de eventos.
				Caracteristicas limitadas.
				Pero Funciona en todos los navegadores.

			- Modelo de eventos estandar.
				Podemos hacer mas cosas con el
				Todos los navegadores lo soportan.

				Las versiones anteriores de Internet explorer como IE7 no lo soportan.

			- Modelo de eventos de Internet Explorer.
				Modelo creado por Microsoft exclusivamente para IE.
*/

function saludo() {
    alert('Hola!');
}
function saludo2() {
    alert('Xd');
}

//Agregar una Accion a un elemento
var btnSaludar = document.getElementById('btn_saludar');
btnSaludar.addEventListener('click', saludo);//Tipo de evento - Funcion a realizar
btnSaludar.addEventListener('click', saludo2);
//Funcion anonima
btnSaludar.addEventListener('click', function(){
    //Todo tu codigo
});

//Eliminar una Accion a un elemento
btnSaludar.removeEventListener('click', saludo2);

/* Algunos de los eventos mas usados:			
			click
			focus
			blur
			change
			onload
			mouseover
			mouseout
			resize 
			submit
*/