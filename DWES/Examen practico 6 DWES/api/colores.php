<?php
// Lista previa de colores
$colores = array("rojo", "verde", "azul", "amarillo", "naranja", "morado");

// Generar índice aleatorio dentro de la lista previa
$indice = array_rand($colores);

// Obtener color correspondiente al índice aleatorio
$color = $colores[$indice];

// Establecer tipo MIME de la respuesta como "text/plain"
header("Content-Type: text/plain");

// Imprimir valor del color
echo $color;
?>