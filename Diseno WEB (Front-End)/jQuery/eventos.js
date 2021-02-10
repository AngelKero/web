$(document).ready(function () {
    var boton = $('#boton');
    var desactivar = $('#desactivar');

	// boton.click(function(e){
    //      e.preventDefault();
	//      alert('Hola');
    // });
    
    
    // Evento con funcion creada
	function saludo(){
         alert('Saludos');
         console.log('Saludos');
    }
    //boton.click(saludo);
    boton.on('click', saludo);
    /*
    $(selector).on(events, function () {
        //codigo
    });
    */


    // Evento con fallback
    boton.on('mouseenter', function () {//Es un hover
        document.body.style.background = 'black';
    });

    boton.on('mouseleave',function () {//Lo contrario a hover
        document.body.style.background = 'white';
    });


    // Eliminando Eventos
    desactivar.on('click',()=>{
        boton.off('click');
        console.log('Boton desactivado');
    });

    // Previniendo el comportamiento de los enlaces
    $('a').on('click', (e)=>{
        e.preventDefault();
        alert('No puedes entrar a google');
    })
});