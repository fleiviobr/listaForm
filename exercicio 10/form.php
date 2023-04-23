<?php
$p = $_GET['p'];
$m = $_GET['m'];
$g = $_GET['g'];

echo "O valor total é: R$" . (($p * 10) + ($m * 12) + ($g * 15)) . ",00";