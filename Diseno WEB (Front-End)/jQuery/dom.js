$(document).ready(function () {
    //parent() accede al elemento padre de un elemento
        /*
        $('#tercera').parent().css({
            background: 'rgba(67, 139, 34, 0.699)'
        });
        Object { 0: div#padre, length: 1, prevObject: Object(1) }
        */


    //parents() accede a los elementos padre de un elemento
        /*
        $('#tercera').parents().css({
            background: 'rgba(67, 139, 34, 0.699)'
        });;
        */
        //Object { 0: div#padre, 1: div#contenedor, 2: body, 3: html, length: 4, prevObject: Object(1) }


    //children() accede a los elementos hijo de un elemento
        //$('#padre').children().fadeOut(1000);
        //$('#padre').children('#tercera').fadeOut(1000);
        //Object { 0: div.caja, 1: div.caja, 2: div#tercera.caja, 3: div.caja, 4: div.caja, length: 5, prevObject: Object(1) }
    

    //find() busca elementos dentro de un elemento
            //elementos a buscar - selector
        //$('#contenedor').find('div .caja').slideUp(1000);


    //siblings() selecciona los elementos hermano de un elemento
        //$('#tercera').siblings().fadeOut(2000);
    
        
    // next() - prev() accede al elemento anterior y posterior de un elemento
    // nextAll() - prevAll() accede a todos los elementos anteriores y posteriores de un elemento
        $('#tercera').prev();
        $('#tercera').next();
        $('#tercera').prevAll().css({background: 'cyan'});
        $('#tercera').nextAll().css({background: 'orange'});
});