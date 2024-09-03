<?php

function multi($a){
    if($a % 4 == 0){
        echo "É multiplo de 4";
    }
    elseif($a %4 != 0){
        echo "Não é multiplo de 4";
    }
    else{
        echo "Escreva um número inteiro";
    }
}

$a = readline("Escreva um número");
multi($a);