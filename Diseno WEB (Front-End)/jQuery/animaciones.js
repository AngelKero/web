// $(selector).animate({parametros}, velocidad, callback);
$(document).ready(function () {
    $('#animar').on('click', function(){
        $('#caja').animate({
            width: '+=300px',
            marginLeft: '+=60px',
            opacity: '.2'
        },300, function(){
            //alert('Fin');
        });

        // Animando el color con Animaciones en CSS3
        $('#caja').toggleClass('animacion');

        // Podemos ejecutar multiples animaciones
        $('.caja').animate({
            width: '-=300px',
            marginLeft: '-=60px',
            opacity: '1'
		}, 300);
    })
});