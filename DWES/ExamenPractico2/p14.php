<?php
function comprueba($s, $h) {
    $hash = md5($s);
    if ($hash == $h) {
        return true;
    } else {
        return false;
    }
}
echo comprueba("Hola mundo", "6cd3556deb0da54bca060b4c39479839");
?>
