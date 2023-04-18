<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['operacao'];

if($op == 'soma') {
    $r = $n1 + $n2;
}
if($op == 'sub') {
    $r = $n1 - $n2;
}
if($op == 'mult') {
    $r = $n1 * $n2;
}
if($op == 'div') {
    $r = $n1 / $n2;
}

echo "<h3>O resultado é: $r";

?>