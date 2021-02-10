var nombre = 'Angel Zaragoza Rodriguez'

var numCaracteres = nombre.length;
document.write(nombre + ' tiene ' + numCaracteres + ' caracteres.' + '<br>');

var apellido = nombre.substring(6, 14);//Valor inicial - Valor final de la cadena
document.write('Tu apellido paterno es: ' + apellido + '<br>');


var apellidoM = nombre.substr(14, 10);
document.write('Tu apellido materno es: ' + apellidoM + '<br>');//Valor inicial - Caracteres a substraer

var nuevoNombre = nombre.replace('Angel', 'Kero');//Texto a remplazar - Texto remplazable
document.write('Tu nuevo nombre es: ' + nuevoNombre + '<br>');

document.write('Tu nombre en Mayusculas: ' + nombre.toUpperCase() + '<br>');

document.write('Tu nombre en Minusculas: ' + nombre.toLowerCase() + '<br>');

var posicion = nombre.indexOf('o');
document.write('La primer letra "o" esta en la posicion: ' + posicion + '<br>');

posicion = nombre.lastIndexOf('o');
document.write('La ultima letra "o" esta en la posicion: ' + posicion + '<br>');