// setTimeout() - Ejecuta una funcion despues de cierto tiempo.
// setInterval() - Ejecuta una funcion cada cierto tiempo.

//Detener un setTimeout
var tiempo = setTimeout(()=>{}, 5000);
clearTimeout(tiempo);

var inicar = document.getElementById('btn_iniciar').addEventListener('click', () => {
    setTimeout(() => {
        alert('Hola mundo');
    }, 5000);
});

var i = 0;
var interval = setInterval(() => {
    i++;
    console.log(i);
}, 1000);
document.getElementById('btn_parar').addEventListener('click', () => {
    clearInterval(interval);
});
