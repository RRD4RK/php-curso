<?php

function funcao($a, $b, $c){
    $soma=0;
    for ($i = $b; $i<=$c; $i++){
        if($i % $a==0){
           $soma+=$i;
         }
    }
    return $soma;

}

$a=(int) readline("Digite o divisor");
$b=(int) readline("Digite outro número");
$c = (int) readline("Digite outro número");
funcao($a, $b, $c);
echo "Soma dos números divisíveis por $a entre $b e $c é: " . funcao($a, $b, $c);