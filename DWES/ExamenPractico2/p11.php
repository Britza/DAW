<?php
function cuenta_caracteres($c, $s) {
    $count = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == $c) {
            $count++;
        }
    }
    return $count;
}
echo cuenta_caracteres("o", "Hola mundo");
?>
