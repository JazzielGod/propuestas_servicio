<?php
    // Incluye la biblioteca PHPWord
    require_once 'C:\xampp\htdocs\propuestas_servicio\vendor\autoload.php';

    require "conexion_db.php";

    // Ejecuta la consulta para obtener los datos
    $sql = "SELECT * FROM PLANTILLAWORD";
    $result = $conn->query($sql);

    // Crea un nuevo documento de PHPWord
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();

    // Agrega los datos obtenidos de la base de datos al documento de Word
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Aquí puedes personalizar cómo deseas agregar los datos al documento
            $section->addText('Nombre de la empresa: ' . $row['nombre_empresa']);
            $section->addText('Direccion: ' . $row['direccion']);
            $section->addText('Municipio: ' . $row['municipio']);
            $section->addText('Provincia: ' . $row['provincia']);
            $section->addText('Código postal: ' . $row['cp']);
            $section->addText('Teléfono: ' . $row['telefono']);
            $section->addText('---------------------');
        }
    } else {
        $section->addText('No se encontraron datos');
    }

    // Guarda el documento en un archivo temporal
    $filename = tempnam(sys_get_temp_dir(), 'WordDoc') . '.docx';
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save($filename);

    // Cierra la conexión a la base de datos
    $conn->close();

    // Descarga el archivo generado
    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\"");
    header("Content-Length: " . filesize($filename));
    readfile($filename);

    // Elimina el archivo temporal después de la descarga
    unlink($filename);

