<?php
    include 'timesession.php';
    include 'perfil_usuario.php';
    include 'datos.php';
    $datos = obtenerDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <br>
    <p>El email es:  <?php echo $email ?> </p>
    <br>
    <p>El id es: <?php echo $id ?> </p>

<!--

    Sin terminar estado de pruebas

    <h2>Formulario para word (Sin terminar)</h2>

   <form action="/propuestas_servicio/phpword/template.php" method="post">

    <label>Nombre empresa:</label><br>
    <input type="text" name="nombre_empresa"><br>
    <label>Dirección:</label><br>
    <input type="text"  name="direccion"><br><br>
    <label>Municipio:</label><br>
    <input type="text" name="municipio"><br><br>
    <label>Provincia:</label><br>
    <input type="text" name="provincia"><br><br>
    <label>Código postal:</label><br>
    <input type="text" name="codigo_postal"><br><br>
    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>
    <input type="submit" value="Enviar">


   </form>

-->
    
    <?php
        foreach ($datos as $dato) {
            echo "<h2>Nombre empresa: " . $dato['nombre_empresa'] . "</h2>";
            echo "<p>Dirección: " . $dato['direccion'] . "</p>";
            echo "<p>Municipio: " . $dato['municipio'] . "</p>";
            echo "<p>Provincia: " . $dato['provincia'] . "</p>";
            echo "<p>Código postal: " . $dato['cp'] . "</p>";
            echo "<p>Teléfono: " . $dato['telefono'] . "</p>";
            echo "<br>";
        }
    ?>


    <a href="generarword.php">Generar word</a>
    <br>
    <a href="logout.php">Cerrar sesión</a>




</body>
</html>