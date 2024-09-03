<?php
$maior= PHP_INT_MIN;
$menor= PHP_INT_MAX;



do{
    $a=readline("Escreva seus números ");
    if($a>$maior){
        $maior = $a;
    }

    elseif($a<$menor){
        $menor = $a;
    }
}while($a!=0);

echo"$maior\n";

echo"$menor";