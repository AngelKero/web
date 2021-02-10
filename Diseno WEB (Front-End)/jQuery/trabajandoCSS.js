$(document).ready(function () {
    $('#boton').on('click', function () {
        //agregando clases
        //$(this).addClass('naranja');
        //quitando clases
        //$(this).removeClass('naranja');
        $(this).toggleClass('naranja');

        /*Es mejor modificar clases*/
        
        //modificar css, ¡no se puede alternar codigo css!
        $(this).css({
            //aqui tus estilos
        });
    });
});