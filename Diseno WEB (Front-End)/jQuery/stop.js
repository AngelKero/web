$(document).ready(function () {
    /* 	Stop por defecto va a parar la animacion en curso y pasar a la siguiente.
		Podemos parar la cola de animaciones siguientes
		y tambien podemos saltar al final de la animacion.
    */
    
    $('#ejecutar').on('click', function () {
        $('.caja').animate({
            marginLeft: '+=300px'
        },4000);
    });

    $('#ejecutar').on('click', function () {
        $('.caja').animate({
            marginLeft: '0px'
        },4000);
    });

    $('#detener').on('click', function(){
        //.stop(limpiarAnimaciones, Saltar al final);
		// .stop(true, false);
        $('.caja').stop(true, false);
    });
});