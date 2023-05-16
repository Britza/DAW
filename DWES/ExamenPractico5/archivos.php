<?php
$archivo = 'ejemplo.txt';

echo "Nombre del archivo: " . $archivo  . "\n";
echo "Ruta del archivo: " . realpath($archivo) . "\n";

if (file_exists($archivo)) {
    echo "El archivo existe " . "\n";
} else {
    echo "El archivo no existe " . "\n";
}

$contenido = file_get_contents($archivo);
echo "Contenido del archivo: " . $contenido . "\n";

$datos = array('uno', 'dos', 'tres', 'cuatro');
file_put_contents($archivo, implode("\n", $datos));

$csv = array();
if (($handle = fopen("ejemplo.csv", "r")) !== FALSE) {
    $datos = fgetcsv($handle, 1000, ",");
    if ($datos !== FALSE) {
        $csv = $datos;
    }
    fclose($handle);
}

echo "Array del archivo CSV: " . "\n";
print_r($csv);
?>
