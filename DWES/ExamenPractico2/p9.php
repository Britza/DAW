<?php
function repetir_hasta($n) {
    if ($n > 1) {
        repetir_hasta($n - 1);
    }
    echo $n . ", ";
}
repetir_hasta(7);
?>

