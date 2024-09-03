<?php

function parImpar($a){
    if($a%2 == 0){
        echo "O número $a é par\n";
    }
    else{
        echo "O número $a é impar";
    }
}

$a = readline("escreva um número");
parImpar($a);