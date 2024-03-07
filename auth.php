<?php
    session_start();
    if (isset($_POST['email']) && isset($_POST['password'])) {

        include 'conexion_db.php';
        $conn = mysqli_connect($db_host, $db_user, $db_pass);

        $email_sesion = mysqli_real_escape_string($conn, $_POST['email']);
        $password_sesion = mysqli_real_escape_string($conn, $_POST['password']);

        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        mysqli_select_db($conn, $db_name) or die("No se encuentra la BBDD");

        mysqli_set_charset($conn, "utf8");

        // Obtener la contraseña almacenada en la base de datos
        $sql = "SELECT password FROM USUARIOS WHERE email = '$email_sesion'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            // Verificar la contraseña ingresada con la almacenada
            if ($password_sesion == $storedPassword) {
                $_SESSION['email'] = $email_sesion; // Almacenar el correo electrónico en la sesión

                header('Location: index.php');
                exit();
            } else {
                // Las credenciales son inválidas, mostrar un mensaje de error
                echo "<script>alert('CREDENCIALES INVÁLIDAS'); window.location.href = 'login.php';</script>";
                $conn->close();
            }
        } else {
            // Usuario no encontrado
            echo "<script>alert('EMAIL NO ENCONTRADO'); window.location.href = 'login.php';</script>";
            $conn->close();
        }
    }

    // Si se accede a este archivo directamente sin enviar el formulario, redirigir a una página de error
    header('Location: logout.php');
    exit();

