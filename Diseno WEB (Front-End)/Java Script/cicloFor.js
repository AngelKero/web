//for (let index = 0; index < array.length; index++) {
//    const element = array[index];  
//}

for (var i = 1; i <= 10; i++) {
    document.write(i);
    document.write('<br>');
}

document.write('<hr>');
var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
             'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

for(var i = 0; i < meses.length; i++){
    document.write(i+1 + ' -- ');
    document.write(meses[i]);
    document.write('<br>');
}

// ----- Ciclo para recorrer un arreglo mediante for in

document.write('<hr>');
for (mes in meses) {
    document.write(mes++ + 1 + ' -- ');
    document.write(meses[mes]);
    document.write('<br>');
}
