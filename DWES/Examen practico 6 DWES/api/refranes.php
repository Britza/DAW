<?php
// Lista previa de refranes españoles
$refranes = array("A quien madruga, Dios le ayuda", "Más vale tarde que nunca", "No hay mal que por bien no venga", "El que mucho abarca, poco aprieta", "A caballo regalado no le mires el diente", "Cría cuervos y te sacarán los ojos", "El hábito no hace al monje", "Más sabe el diablo por viejo que por diablo", "Ojos que no ven, corazón que no siente", "Perro ladrador, poco mordedor");

// Generar índice aleatorio dentro de la lista previa
$indice = array_rand($refranes);

// Obtener refrán correspondiente al índice aleatorio
$refran = $refranes[$indice];

// Establecer tipo MIME de la respuesta como "text/plain"
header("Content-Type: text/plain");

// Imprimir valor del refrán
echo $refran;
?>