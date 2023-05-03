<?php
foreach ($_SERVER as $key => $value) {
    echo "$key: $value<br>";
}
echo "El array \$_SERVER tiene " . count($_SERVER) . " variables.";
?>
