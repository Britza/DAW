<?php
function contar($s) {
    if ($s == "") {
        return 0;
    } else {
        return strlen($s);
    }
}
echo contar("Hola")."\n";
echo contar("");
?>

