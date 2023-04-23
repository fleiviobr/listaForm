<?php

$nome = $_GET['nome'];
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$freq = $_GET['freq'];

$media = ($n1 + $n2) / 2;
if($media >= 5){
    if($freq >= 75){
        echo "Aluno $nome aprovado";
    }else{
        echo "Aluno $nome reprovado por frequência";
    }
}else{
    echo "Aluno $nome reprovado por nota";
}
?>