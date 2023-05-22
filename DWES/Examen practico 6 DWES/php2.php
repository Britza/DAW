<?php
// Ubicación seleccionada
$lat = "40.4168";
$lon = "-3.7038";
$api = "b9defc5035ada9126fd83bd078b98f76";
// Obtener información meteorológica
/* Me da un error en la parte de api que me dice que no es valida o que no este activa he creado encima otra nueva para probar y seguia sin irme*/
$url = "https://api.openweathermap.org/data/3.0/onecall?lat=" . $lat . "&lon=" . $lon . "&exclude=minutely,hourly&appid=" . $api;
$data = file_get_contents($url);
$weather = json_decode($data, true);

// Mostrar información meteorológica
echo "Tiempo hoy: " . $weather['current']['weather'][0]['description'] . "<br>";
echo "Humedad hoy: " . $weather['current']['humidity'] . "%<br>";
echo "Presión atmosférica hoy: " . $weather['current']['pressure'] . " hPa<br>";
echo "Porcentaje de nubosidad hoy: " . $weather['current']['clouds'] . "%<br>";
echo "<br>";
echo "Tiempo el 15 de Julio del 2021: " . $weather['daily'][14]['weather'][0]['description'] . "<br>";
echo "Humedad el 15 de Julio del 2021: " . $weather['daily'][14]['humidity'] . "%<br>";
echo "Presión atmosférica el 15 de Julio del 2021: " . $weather['daily'][14]['pressure'] . " hPa<br>";
echo "Porcentaje de nubosidad el 15 de Julio del 2021: " . $weather['daily'][14]['clouds'] . "%<br>";
?>
