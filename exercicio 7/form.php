<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "$nome possui " . ($idade * 365) . " dias de vida";
?>