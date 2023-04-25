<?php
$pasta = $_GET['pasta'];
$quantidade = $_GET['q'];

for ($i=1; $i <= $quantidade; $i++) { 
    echo "<img src='$pasta/$i.jpg' width='150px' height='100px'><br>";
}
?>