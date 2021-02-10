$(document).ready(function () {
    //Modificando Texto
    $('#titulo').text('Encabezado Modificado con jQuery');
    //Insertar Html
    $('#titulo').html('<u>Encabezado Modificado con jQuery</u>');

    //Cambiando el titulo obteniedo el valor de un input:text
    var nombre = $('#nombre');
    nombre.on('change', function(){
        $('#titulo').text(nombre.val());
    });

    //Cambiando Atributos
    $('#enlace').text('PornHub XD');
    $('#enlace').attr('href', 'https://www.pornhub.com');

    //Cambiando Muchos Atributos
    $('p').attr({
        class: 'parrafo',
        id: 'parrafo'
    });

});