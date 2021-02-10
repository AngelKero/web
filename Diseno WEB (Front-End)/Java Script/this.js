var cajas = document.getElementsByClassName('caja');

function color(i) {
    //cajas[0].classList.toggle('negro');//togle alterna la clase poniendo y quitando
    this.classList.toggle('negro');
}

//cajas[0].addEventListener('click', color);

for(var i = 0; i < cajas.length; i++){
    cajas[i].addEventListener('click', color);
}