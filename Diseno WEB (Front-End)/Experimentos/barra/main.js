/*Guarda la ubicacion del scroll inicial osea 0*/
let ubicacionPrincipal = window.pageYOffset; //0

window.addEventListener("scroll", function(){
	/*Guarda la ubicacion de la pantalla cuando se scrollea*/
    let desplazamientoActual = window.pageYOffset; //180
    if(ubicacionPrincipal >= desplazamientoActual){ // 200 > 180
        document.getElementsByTagName("nav")[0].style.top = "0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
	/*Reinicia la principal para que cuando se haga scroll se repita el evento*/
    ubicacionPrincipal= desplazamientoActual; //200
})


// Menu
//Seleciona la lista de elementos
let lista = document.querySelectorAll(".lista")[0];
let semaforo = true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click", function(){
    if(semaforo){
        document.querySelectorAll(".hamburguer")[0].style.color ="#fff";
        semaforo= false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color ="#000";
        semaforo= true;
    }
    enlacesHeader.classList.toggle("menudos")
})