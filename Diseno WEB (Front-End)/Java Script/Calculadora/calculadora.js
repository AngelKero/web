function sumar() {
    var numero1 = parseFloat(document.getElementById('numero1').value);
    var numero2 = parseFloat(document.getElementById('numero2').value);

    if (isNaN(numero1) || isNaN(numero2)) {
        var Error = 'Error';
        document.getElementById('resultado').value = Error;
        alert('Rellene los campos');
    }else{
        var resultado = numero1 + numero2;

        document.getElementById('resultado').value = resultado;
    }
}