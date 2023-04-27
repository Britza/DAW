<?php
function suma($a, $b = 0) {
    if ($b == 0) {
        $b = 15;
    }
    return $a + $b;
}
echo suma(5);
?>

