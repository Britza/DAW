<?php
/*
Para enviar los parametros yo escribo en la parte del url

http://localhost:3000/api/imc.php?peso=57&altura=1.75

Se que tambien se puede hacer con el metodo post pero decidi ponerlo en la url porque es mas facil

*/

// Obtener peso y altura de los parámetros "peso" y "altura"
$peso = $_GET["peso"];
$altura = $_GET["altura"];

// Calcular IMC
$imc = $peso / ($altura * $altura);

// Establecer tipo MIME de la respuesta como "text/plain"
header("Content-Type: text/plain");

// Imprimir IMC
echo $imc;
?>