<?php
// Nombre del archivo CSV
$file = 'asistencia.csv';

// Obtener datos del formulario
$asistencia = $_POST['asistencia'];
$nombre = $_POST['nombre'];
$comentarios = $_POST['comentarios'];
$evento = $_POST['evento'];

// Abrir el archivo en modo de escritura
$handle = fopen($file, 'a');

// Formato de la línea a escribir
$linea = array($asistencia,$nombre, $comentarios, $evento);

// Escribir la línea en el archivo CSV
fputcsv($handle, $linea);

// Cerrar el archivo
fclose($handle);

// Responder con un JSON indicando éxito
echo json_encode(array("error" => false, "desc" => "Asistencia guardada correctamente"));
?>
