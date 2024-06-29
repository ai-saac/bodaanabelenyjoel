<?php
    // Nombre del archivo CSV
    $file = 'sugerencias_canciones.csv';

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $link = $_POST['link'];

    // Abrir el archivo en modo de escritura
    $handle = fopen($file, 'a');

    // Verificar si la apertura del archivo fue exitosa
    if ($handle !== false) {
        // Formato de la línea a escribir
        $linea = array($nombre, $descripcion, $link);

        // Escribir la línea en el archivo CSV
        fputcsv($handle, $linea);

        // Cerrar el archivo
        fclose($handle);

        // Responder con un JSON indicando éxito
        echo json_encode(array("error" => false, "desc" => "Sugerencia guardada correctamente"));
    } else {
        // Responder con un JSON indicando error
        echo json_encode(array("error" => true, "desc" => "Error al abrir el archivo"));
    }
?>
