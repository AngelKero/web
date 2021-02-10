<?php 
    # Solo puedes verificar si se ha enviado un formulario
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo 'Se enviaron por GET';
    } else {
        echo 'Se enviaron por POST';
    }

    # Puedes verificar si a enviado de uno o mas formularios
    if(isset($_POST['submit'])){
        echo '<br>Se enviaron los datos<br>';
        print_r($_POST['submit']);
    }
?>