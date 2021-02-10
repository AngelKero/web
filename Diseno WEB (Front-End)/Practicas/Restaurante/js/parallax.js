$(document).ready(function () {

    $(window).scroll(function(){//Es un evento que se ejucuta cuendo el usuario hace scroll
        var windowWidth = $(window).width();//Obtengo el ancho de la ventana

        if( windowWidth >= 800 ){//se ejecuta el efecto cuando la pantalla es de escritorio
            scroll = $(window).scrollTop();//se obtiene la posicion del scroll

            $('#introduccion').css({
                transform: 'translate(0px, ' + scroll / 2 + '%)'
            });

            $('#descripcion').css({
                transform: 'translate(0px, ' + -(scroll / 4.7) + '%)'
            });
        }
    });

    $(window).resize(function () { 
        var windowWidth = $(window).width();//Obtengo el ancho de la ventana

        if( windowWidth <= 900 ){
            $('main .platillos').css({
                paddingTop: '-200px'
            });
        }

        if( windowWidth <= 800 ){
            $('#introduccion').css({
                transform: 'translate(0px, 0px)'
            });

            $('#descripcion').css({
                transform: 'translate(0px, 0px)'
            });
            $('main .platillos').css({
                paddingTop: '0px'
            });
        }
    });
});