<?php
$nome = $_GET['nome'];
$hora = $_GET['hora'];

if ($hora <= 1200) {
    echo "Bom dia $nome";
} elseif ($hora <= 1800) {
    echo "Boa tarde $nome";
} else {
    echo "Boa noite $nome";
}
?>