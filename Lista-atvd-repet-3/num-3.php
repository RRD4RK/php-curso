<?php
$soma = 0;
$media =0;
$quant = 0;

do{
    $i = readline("Escreva um número");
    $soma += $i;
    $quant++;


}while($i != 0);

$media = $soma/($quant-1);

echo"Essa e a média $media\n";
echo "Essa é a soma $soma\n";
echo "Essa é a quantidade de números digitados $quant\n";