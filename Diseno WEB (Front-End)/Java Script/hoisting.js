// Hoisting se le llama a lo que hace Javascript por defecto, que es mover automaticamente todas las declaraciones al inicio del scrtip actual o funcion.


		// En Javascript podemos declarar una variable despues de que haya sido usada.

		// Esto significa que podemos usar una variable ante de declararla.
		// Ejemplo: 

		nombre = 'Angel';
		document.write(nombre);

		// Javascript automaticamente va posicionar esta declaracion al inicio.
		var nombre;

// ----- ----- ----- ----- -----

		// IMPORTANTE: Javascript solo posicionara al inicio las "declaraciones", no las "inicializaciones".

		var nombre; // Declaracion
		//document.write(nombre);

		nombre = 'Angel'; // Inicializacion

		// Es importante declarar todas nuestras variables al inicio para evitar bugs y errores.