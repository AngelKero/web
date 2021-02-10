var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

//Cuando se da click se ejecuta una funcion
btn.addEventListener('click', function(){
    //Se agrega la clase para activar el loader
    loader.classList.add('active');

    //obtener información de una URL
    var peticion = new XMLHttpRequest();
    //Inicializa el pedido
    /*
    Parámetros
    -method
        El método HTTP a usar: tanto "POST" o "GET". Se ignora para urls que no son 
        de HTTP.
    -url
        La URL a la que se envía el pedido.
    */
    peticion.open('GET', 'http://www.json-generator.com/api/json/get/cefUkSOoEi?indent=2');

    /* Mientras se recibe la informacion */
    //Una función que se llama cuando el atributo readyState cambia.
    peticion.onreadystatechange = function(){
        console.log(peticion.readyState);
        //readyState es el estado del pedido, 4 =La operación está terminada.
        //status es el estado de la respuesta al pedido. Éste es el código 
        //HTTPresult (por ejemplo, status es 200 por un pedido exitoso)
        if (peticion.readyState == 4 && peticion.status == 200) {
            //Se remueve la clase para activar el loader
            loader.classList.remove('active');
        }
    }

     /* Cuendo se recibe la informacion */
     // Hacer algo con la información recibida
    // onload es la función que se llama cuando una transacción del XMLHttpRequest 
    // es ejecutada correctamente.
    peticion.onload = function(){
        // console.log(JSON.parse(peticion.responseText)[0].nombre);
        //1-.Con responseText se obtiene el pedido como texto
        //2-.Con la funcion de JSON.parse() se convierte el tetxo recibido
        // a un arreglo
        var datos = JSON.parse(peticion.responseText);

        /* Con el forEach se recorre todo el arreglo */
        // datos.forEach(persona => {
        //     var elemento = document.createElement('tr');
        //     elemento.innerHTML += ("<td>" + persona.id + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.edad + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.pais + "</td>");
        //     elemento.innerHTML += ("<td>" + persona.correo + "</td>");
        //     document.getElementById('tabla').appendChild(elemento);
        // });

        /* Con el forEach se recorre el arreglo que nosotros configuremos */
        for(var i = 0; i < datos.length; i++){
            var elemento = document.createElement('tr');
            elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
            document.getElementById('tabla').appendChild(elemento);
        }
    }

    //Se envia la peticion
    peticion.send();
});