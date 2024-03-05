<?php
    session_start();

    if(isset($_SESSION['email'])){

        // Establecer una variable de sesión para marcar el tiempo de inicio de sesión
        $_SESSION['start_time'] = time();

        // Configurar el tiempo de expiración de la sesión
        $expiration_time = 120; // en segundos
        $_SESSION['expire_time'] = $_SESSION['start_time'] + $expiration_time;

        // Redirigir al usuario después de 5 segundos
        header("refresh:120; url=login.php");

        echo "Sesión iniciada por 120 segundos.....";
    }else{
        header("location:logout.php");
    }
        
