
var amigos = ['Angel', 'Adrian', 'Zaragoza', 'Rodriguez'];

// ----- Metodo Length
		// Length nos permite conocer cuantos elementos tiene un arreglo.
		document.write(amigos.length + '<br>');

// ----- Metodo Join		
        //Concatena todos los arrays en un String y puedes agregar texto entre cada array
		// document.write(amigos.join('-'));

		var cadenaAmigos = amigos.join(' ** ');
		document.write(cadenaAmigos + '<br>');

// ----- Metodo Pop y Push
		// Pop nos permite eliminar el ultimo elemento de un arreglo.
		// Push nos permite agregar un elemento al final de un arreglo.

        amigos.pop();
        console.log(amigos);
        document.write(amigos + '<br>');

		amigos.push('Luis');
        console.log(amigos);
        document.write(amigos + '<br>');


// ----- Metodo shift y unshift
		// Shift nos permite eliminar el primer elemento del arreglo.
		// Unshift nos permite agregar un elemento al inicio del arreglo.

        amigos.shift();
        document.write(amigos + '<br>');

		amigos.unshift('Felipe');
        console.log(amigos);
        document.write(amigos + '<br>');

// ----- Metodo concat
        //Concatena dos Arrays en uno

		var amigos2 = ['Juan', 'Oscar'];

		var todosMisAmigos = amigos.concat(amigos2);
		document.write(todosMisAmigos + '<br>');

// ----- Metodo Sort y Reverse
		// Sort nos permite ordenar alfabeticamente un arreglo.
		// Reverse nos permite cambiar el orden de los elementos.

        todosMisAmigos.sort();
        document.write(todosMisAmigos + '<br>');

        todosMisAmigos.reverse();
        document.write(todosMisAmigos + '<br>');
		// Nota: sort no funciona para ordenar numeros, solo cadenas de texto.