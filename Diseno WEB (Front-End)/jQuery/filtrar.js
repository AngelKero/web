$(document).ready(function () {
    // first() - Regresa el primer elemento de varios seleccionados
    $('.caja').first().css({
        background: 'black',
        color: 'white'
    });
    //Object { 0: div.caja, length: 1, prevObject: {…} }


    // last() - Regresa el ultimo de varios seleccionados
    $('.caja').last().css({
        background: 'black',
        color: 'white'
    });

    // eq() - Regresa un elemento en base a un index.
    $('.caja').eq(2).css({
        background: 'lightseagreen',
        color: 'white'
    });

    // filter() - Nos permite filtrar entre los elementos mediante un criterio.
    /* Ejemplo:
            Selecciona todas las cajas, despues de esa seleccion solo selecciona la #segunda.
    */
   $('.caja').filter('#segunda').css({
    background: 'fuchsia',
    color: 'white'
   });
   //Object { 0: div#segunda.caja, length: 1, prevObject: {…} }

   // not() - Nos regresa los elementos que no concuerdan con el criterio.
   /*
   $('.caja').not('#segunda').css({
    background: 'fuchsia',
    color: 'white'
   });
   */
});