$(document).ready(function () {
    var i = 1;
    var contenedor = $('#contenedor');

    $('#add').on('click', function () {
        var caja = $('<div></div>').attr('class', 'caja').text(i);
        i++;
        //Agregar al inicio
        contenedor.append(caja);
        //Agregar al final
        //contenedor.prepend(caja);

        //Agregar Antes del contenedor
        //contenedor.before(caja);

        //Agregar Despues del contenedor
        //contenedor.after(caja);
    });
});