<?php
include 'vehiculos.inc';

$v1 = new vehiculos\Vehiculos('1234ABC', 5);
$v2 = new vehiculos\Vehiculos('5678DEF', 3);


$v1->ver();
echo "\n";

$v2->ver_completo();
echo "\n";

$v2->actualizar_matricula('9012GHI');

echo $v2->ver();
?>

