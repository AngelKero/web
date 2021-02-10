// ----- ----- ----- ----- Local Storage
// Con Local Storage la informacion se mantiene guardada en el computador del usuario

// Comprobamos que el navegador soporte Local Storage
if (typeof(Storage) != "undefined") {
    localStorage.setItem('nombre', 'Angel Zaragoza');//Variable a guardar - Valor a guardar
    localStorage.nombre = 'XD';
    document.write('Si soporta' + '<br>');
}else{
    alert('Tu navegador no soporta LocalStorage, por favor actualizalo.');
}


// ----- ----- ----- -----

// Llamamos al nombre guardado en localStorage
document.write(localStorage.nombre + '<br>');

// Eliminamos el elemento de localStorage
//localStorage.removeItem('nombre');



// ----- ----- ----- ----- Session Storage
// Con Session Storage la informacion es borrada cuando se cierra la pestaña

sessionStorage.nombre = 'Adrian';
document.write(sessionStorage.nombre);