<?php
    if(isset($_POST['nombre_empresa']) && isset($_POST['direccion']) && isset($_POST['municipio']) && isset($_POST['provincia']) && isset($_POST['codigo_postal']) && isset($_POST['telefono']))
    {
        $nombre_empresa = $_POST['nombre_empresa'];
        $direccion = $_POST['direccion'];
        $municipio = $_POST['municipio'];
        $provincia = $_POST['provincia'];
        $codigo_postal = $_POST['codigo_postal'];
        $telefono = $_POST['telefono'];

        echo "Datos recibidos: <br>";
        echo "Nombre empresa: " . $nombre_empresa . "<br>";
        echo "Dirección: " . $direccion . "<br>";
        echo "Municipio: " . $municipio . "<br>";
        echo "Provincia: " . $provincia . "<br>";
        echo "Código postal: " . $codigo_postal . "<br>";
        echo "Teléfono: " . $telefono . "<br>";

        


    }else{
        header('Location: logout.php');
        exit();
    }
       

//Sin terminar, estadi de pruebas