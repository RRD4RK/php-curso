<?php

function entre($a, $b){
    $soma=0;
    for ($i = $a; $i <= $b; $i++){
         $soma += $i;
         $res = $soma -($a +$b);
    }
    echo "A soma entre $a e $b é igual a $res";
}

$a = readline("Escreva o menor número ");
$b = readline("Escreva o maior número ");
entre($a, $b);