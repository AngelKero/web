var intervalo = setInterval(() => {
    var fecha = new Date();
    var fechas = document.getElementById('fechas'); 
    fechas.innerHTML = fecha;
}, 1000);


var fecha = new Date();
document.write(fecha + '<br>');

document.write('Horas:' + (fecha.getHours()-12) + '<br>');
document.write('Minutos:' + fecha.getMinutes() + '<br>');
document.write('Segundos:' + fecha.getSeconds() + '<br>');

var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
document.write('Semana:' + semana[fecha.getDay()] + '<br>');

var semana = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Semptiembre', 'Octubre'];
document.write('Mes:' + semana[fecha.getDay()] + '<br>');

document.write('Año:' + fecha.getFullYear() + '<br>');