<?php
$soma=0;
$media=0;

for($i=0; $i<=9; $i++){
   $a = readline("Escreva um número");
   $soma += $a;
}
$media = $soma/10;
echo "A média é de $media\n";
echo"A soma é $soma\n";