$(document).ready(function () {
    /*Los callbacks son funciones que se ejecutan 
    despues de que una animacion haya terminado.*/
    
    $('#ejecutar').on('click', function(){
        $('.caja').slideUp(1000, function(){
            $(this).slideDown(1000);
        });
    });
    

    // Esto no funcionaria correctamente sin un callback:
    /*
    $('#ejecutar').on('click', function(){
        $('.caja').slideUp(1000);
        alert('Inicio');
        $('.caja').slideDown(1000);
    });
    */
});