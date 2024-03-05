<?php
    $db_host="localhost";
    $db_user="root";
    $db_pass="jaziel1218*[=}*";
    $db_name="PRUEBA_SERVICIO";
    
    // Crear una conexión a la base de datos
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        
    // Verificar si la conexión es exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    