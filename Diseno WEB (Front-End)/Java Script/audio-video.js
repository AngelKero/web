var video    = document.getElementById('video'),
    btnPlay  = document.getElementById('btnPlay'),
    btnPause = document.getElementById('btnPause'),
    volumen  = document.getElementById('volumen');

    btnPlay.addEventListener('click', () => {
        video.play();
        document.body.style.transition = 'all 1s ease';
        document.body.style.background = '#2c2c2c';
    });
    btnPause.addEventListener('click', () => {
        video.pause();
        document.body.style.transition = 'all 1s ease';
        document.body.style.background = '#fff';
    });
    volumen.addEventListener('change', () => {
        video.volume = volumen.value;
    });

    // -- Propiedades
		// video.currentTime - regresa el tiempo actual en el que va el video
		// video.duration - regresa la duracion del video
		// video.ended - regresa si el video ya termino

		// -- Eventos
		/*
			pause
			play
		*/