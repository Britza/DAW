<?php
// Obtener JSON del cuerpo de la petición
$json = file_get_contents("construir-nombre.json");

// Decodificar JSON
$data = json_decode($json, true);

// Obtener nombre y apellidos del JSON
$nombre = $data["nombre"];
$apellidos = $data["apellidos"];

// Construir nombre completo
$nombreCompleto = $nombre . " " . $apellidos;

// Establecer tipo MIME de la respuesta como "text/plain"
header("Content-Type: text/plain");

// Imprimir nombre completo
echo $nombreCompleto;
?>