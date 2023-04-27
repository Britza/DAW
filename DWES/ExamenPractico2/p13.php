<?php
function firma($s) {
    return md5($s);
}
echo firma("Hola mundo");
?>

