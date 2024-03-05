<?php
    if (isset($_SESSION['email'])) {

        include 'conexion_db.php';

        $email_sesion = $_SESSION['email'];
        $sql = "SELECT * FROM USUARIOS WHERE email = '$email_sesion'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row["email"];
            $id = $row["id"];
            
        } else {
            $conn->close();
        }
    
    } else {
        // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
        header('Location: logout.php');
        exit();
    }
