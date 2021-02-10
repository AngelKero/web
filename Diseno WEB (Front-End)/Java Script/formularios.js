// Obtener todos los elementos que tengan el atributo 'name'
// var formulario = document.getElementsByName('formulario')[0];//Se tiene que especificar el elemento a guardar

function validar(e) {
    //Validando Nombre
    if (nombre.value > 18) {
        alert('Numero de caracteres permitidos');
    }else if (nombre.value == '') {
        alert('Favor de rellenar todos los campos');
    }
    //Radio Button
    if (sexo[0].checked == false && sexo[1].checked == false) {
        alert('Selecciona un sexo');
    }
    //terminos y  condiciones
    if (!terminos.checked) {
        alert('Acepta los terminos y condiciones para continuar');
    }

    e.preventDefault();//Evita que se ejecute una accion !Previene envio del formulario
}

var formulario = document.getElementById('formulario');
var nombre = formulario.nombre;
var sexo = formulario.sexo;
var terminos = formulario.terminos;

formulario.addEventListener('submit', validar);
