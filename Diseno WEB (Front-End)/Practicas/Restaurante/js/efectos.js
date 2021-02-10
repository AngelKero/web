$(document).ready(function () {
    //-----------------Efecto menu----------------------//
    $('#menu a').each(function(index, elemento){
        //el .each va a a funcionar como un ciclo for y va a cambiar de elemento cada iteracion
        $(this).css({
            top: '-200px'
        });

        $(this).animate({
            top: '0'
        }, 1500 + (index * 400));
        /*Se multiplica el index por los milisegundos de diferencia que 
        se va animar cada elemento*/
        /*El index es como el iterador del ciclo for y obtiene el valor
        del elemento en el que va actualmente*/
    });


    //--------------Efecto header----------------------//
    if( $(window).width() >= 800 ){//Se obtiene el tamaño de la pantalla
        $('#introduccion').css({
            opacity: 0,
            left: 200
        });
        $('#introduccion').animate({
            opacity: 1,
            left: 0
        }, 2000);
    }


    //-----------Anclas----------------//
    var info = $('#info').offset().top,//Se calcula la posicion en pantalla
        platillos = $('#platillos').offset().top,
        galeria = $('#galeria').offset().top,
        ubicacion = $('#ubicacion').offset().top;

    $('#btn-info').on('click', function(e){
        e.preventDefault();//Se evita el conportamiento de los enlaces
        $('html, body').animate({//se anima el html hasta la posicion de scroll
            scrollTop: info - 225
        }, 700);
    });

    $('#btn-menu').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: platillos
        }, 700);
    });

    $('#btn-galeria').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: galeria
        }, 700);
    });

    $('#btn-ubicacion').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: ubicacion
        }, 700);
    });
});