<?php
// Obtener un chiste aleatorio
$url = "https://api.chucknorris.io/jokes/random";
$data = file_get_contents($url);
$joke = json_decode($data, true);
echo "Chiste: " . $joke['value'] . "<br>";
echo "Actualizado en: " . $joke['updated_at'] . "<br>";
echo "Categoría: " . implode(", ", $joke['categories']) . "<br>";

// Obtener una lista de todas las categorías disponibles
$url = "https://api.chucknorris.io/jokes/categories";
$data = file_get_contents($url);
$categories = json_decode($data, true);
echo "<ul>";
foreach ($categories as $category) {
    echo "<li><a href='https://api.chucknorris.io/jokes/random?category=" . urlencode($category) . "'>" . $category . "</a></li>";
}
echo "</ul>";

// Buscar un chiste aleatorio por un texto concreto
$query = "spain";
$url = "https://api.chucknorris.io/jokes/search?query=" . urlencode($query);
$data = file_get_contents($url);
$results = json_decode($data, true);
if (count($results['result']) > 0) {
    $joke = $results['result'][array_rand($results['result'])];
    echo "Chiste: " . $joke['value'] . "<br>";
    echo "Actualizado en: " . $joke['updated_at'] . "<br>";
    echo "Categoría: " . implode(", ", $joke['categories']) . "<br>";
} else {
    echo "No se encontraron chistes para la búsqueda '" . $query . "'.";
}
?>