/*--------------------VARIABLES----------------------------*/
//Elementos del DOM
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
    error_box = document.getElementById('error_box'),
    tabla = document.getElementById('tabla'),
    loader = document.getElementById('loader');
//Valores del formulario
var usuario_nombre,
    usuario_edad,
    usuario_pais,
    usuario_correo;



/*--------------------FUNCIONES----------------------------*/
/*Funcion para traer elementos y mostrarlos en pantalla*/
function cargarUsuarios(){
    // Se borrar lo que ya este cargado
    tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>';
    // Se crea la peticion
    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'php/leer-datos.php');
    //Se Activa el loader
    loader.classList.add('active');

    //Cuando ya este la respuesta se ejecuta esta funcion
    peticion.onload = function(){
        //Se guarda la respuesta como JSON6ghb y 
        respuesta = JSON.parse(peticion.responseText);
        //Si el JSON regreso como respuesta error: true se muestra un error
        if (respuesta.error) {
            error_box.classList.add('active');
        } else{ // Si no hubo errores se dibuja en pantalla los datos
            for (var i = 0; i < respuesta.length; i++) {
                var elemento = document.createElement('tr');
                elemento.innerHTML += ("<td>" + respuesta[i].id + "</td>");
                elemento.innerHTML += ("<td>" + respuesta[i].nombre + "</td>");
                elemento.innerHTML += ("<td>" + respuesta[i].edad + "</td>");
                elemento.innerHTML += ("<td>" + respuesta[i].pais + "</td>");
                elemento.innerHTML += ("<td>" + respuesta[i].correo + "</td>");
                tabla.appendChild(elemento);
            }
        }
    }

    //Cuando se este cargando la respuesta se ejecuta esta funcion
    peticion.onreadystatechange = function() {
        //Si la respuesta fue correcta se quita el loader
        if (peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }
    }
    //Se envia la peticion
    peticion.send();
}

/*Funcion para insertar usuarios nuevos y mostrarlos en pantalla*/
function agregarUsuario(e){
    e.preventDefault();//Se evita que se envie el submit y no se recarge la pagina

    var peticion = new XMLHttpRequest();
    peticion.open('POST', 'php/insertar-datos.php');

    /*Se Sanitizan los valores del formulario*/
    usuario_nombre = formulario.nombre.value.trim();
    usuario_edad = parseInt(formulario.edad.value.trim());
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();

    //Funcion que valide los datos
    function formulario_valido(){
        if(usuario_nombre == '') {
            return false;
        } else if(isNaN(usuario_edad)) {
            return false;
        } else if(usuario_pais == '') {
            return false;
        } else if(usuario_correo == ''){
            return false;
        }
        return true;
    }

    //Si los datos son validos, se envian los datos al servidor
    if (formulario_valido()) {
        //Se quita el error si es que habia uno
        error_box.classList.remove('active');
        //Se guardan los datos a enviar como si se enviaran por GET en la url
        var parametros = 'nombre='+ usuario_nombre +'&edad='+ usuario_edad +'&pais='+ usuario_pais +'&correo='+ usuario_correo;

        //Se establece que se enviaran los datos por la url
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //Se activa el loader
        loader.classList.add('active');

        //Cuando se hayan enviado los datos se muestran actulizados en pantalla
        peticion.onload = function(){
            cargarUsuarios();
            //Se limpia el formulario
            formulario.nombre.value = '';
            formulario.edad.value = '';
            formulario.pais.value = '';
            formulario.correo.value = '';
        }

        peticion.onreadystatechange = function(){
            //Se remueve el loader hasta que la peticion haya sido exitosa
            if (peticion.readyState == 4 && peticion.status == 200) {
                loader.classList.remove('active');
            }
        }

        //Se envian los parametros
        peticion.send(parametros);
    }else{//Si los datos no son validos, se muestra el error
        error_box.classList.add('active');
        error_box.innerHTML = '<p>Por favor completa el formulario correctamente</p>';
    }
}


/*--------------------Eventos----------------------------*/

btn_cargar.addEventListener('click', function(){
    cargarUsuarios();
});

formulario.addEventListener('submit', function(e){
    agregarUsuario(e);
});