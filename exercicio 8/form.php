<?php
$value = $_GET['select'];

for ($i = 0; $i <= 10; $i++) {
    echo "$value x $i = " . ($value * $i) . "<br>";
}
?>