<?php
    // ESTO ES SIMPLEMENTE PARA EL BOTÓN DE CERRAR SESIÓN
    
    
    // SIEMPRE QUE ESTEMOS TRABAJANDO LA SESIÓN
    // DEBEMOS INICIAR LA SESIÓN PARA DESPUÉS CERRARLA
    session_start();
    session_destroy();
    header("location: ../index.php");

//     <!-- FINALIZACIÓN DEL CÓDIGO PHP
// POR: FRANCISCO QUIÑONES MALDONADO -->