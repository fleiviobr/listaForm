<?php
$year = $_GET['year'];

if ($year % 4 == 0) {
    echo "O ano $year é bissexto";
} else {
    echo "O ano $year não é bissexto";
}
?>