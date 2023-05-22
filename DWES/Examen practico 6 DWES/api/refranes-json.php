<?php
// Lista previa de refranes españoles
$refranes = array("A quien madruga, Dios le ayuda", "Mas vale tarde que nunca", "No hay mal que por bien no venga", "El que mucho abarca, poco aprieta", "A caballo regalado no le mires el diente", "Cria cuervos y te sacaran los ojos", "El habito no hace al monje", "Mas sabe el diablo por viejo que por diablo", "Ojos que no ven, corazon que no siente", "Perro ladrador, poco mordedor");

// Generar tres índices aleatorios dentro de la lista previa
$indice1 = array_rand($refranes);
$indice2 = array_rand($refranes);
$indice3 = array_rand($refranes);

// Obtener tres refranes correspondientes a los índices aleatorios
$refran1 = $refranes[$indice1];
$refran2 = $refranes[$indice2];
$refran3 = $refranes[$indice3];

// Crear objeto JSON con los tres refranes y el campo extra
$objeto_json = array(
    "primero" => $refran1,
    "segundo" => $refran2,
    "tercero" => $refran3
);

// Establecer tipo MIME de la respuesta como "application/json"
header("Content-Type: application/json");

// Imprimir objeto JSON en formato JSON
echo json_encode($objeto_json);
?>