(function(){
    function validar(e) {
        error.innerHTML = '';
        function validar_texto(e, texto, li) {
            if (texto.value == '' || texto.value == null) {
                e.preventDefault();//previene que se envie el formulario
                error.style.display = 'block';
                error.innerHTML += '<li>Por favor completa el campo: ' + li +'</li>';
            }
        }
        function validar_sexo(e, sexo) {
            if (sexo.value == '') {
                e.preventDefault();
                error.style.display = 'block';
                error.innerHTML += '<li>Por favor elija un sexo: </li>';
            }
        }
        function validar_terminos(e, terminos) {
            if (terminos.checked == false) {
                e.preventDefault();
                error.style.display = 'block';
                error.innerHTML += '<li>Acepte los terminos y condiciones para continuar</li>';
            }
        }
        validar_texto(e, nombre, 'Nombre Completo');//Validar Nombre completo
        validar_texto(e, email, 'Correo Electronico');//Validar Email
        validar_texto(e, nick, 'Nombre de Usuario');//Validar Nombre de Usuario
        validar_texto(e, contraseña, 'Contraseña');//Validar Contraseña
        validar_sexo(e, sexo);//Validar sexo
        validar_terminos(e, terminos);//Validar terminos
    }

    var formulario = document.getElementById('formulario'),
        nombre     = formulario.nombre,
        email      = formulario.email,
        nick       = formulario.nick,
        contraseña = formulario.contraseña,
        sexo       = formulario.sexo,
        terminos   = formulario.terminos,
        error      = document.getElementById('error');
    
    formulario.addEventListener('submit', validar);
}())
