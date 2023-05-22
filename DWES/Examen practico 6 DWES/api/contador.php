<?php
/*
Para enviar los parametros yo escribo en la parte del url

http://localhost:3000/api/imc.php?texto=hola

Se que tambien se puede hacer con el metodo post pero decidi ponerlo en la url porque es mas facil

*/

// Obtener cadena de texto del parámetro "texto"
$texto = $_GET["texto"];

// Obtener longitud de la cadena de texto
$longitud = strlen($texto);

// Establecer tipo MIME de la respuesta como "text/plain"
header("Content-Type: text/plain");

// Imprimir longitud de la cadena de texto
echo $longitud;
?>