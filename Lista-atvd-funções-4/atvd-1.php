<?php

function soma($a, $b){
    $res = $a+$b;
    echo "A soma dos números é de $res";
}

function sub($a, $b){
    $res = $a-$b;
    echo "A subtração dos números é de $res";
}

function mult($a, $b){
    $res = $a*$b;
    echo "A multiplicação dos números é de $res";
}

function div($a, $b){
    $res = $a/$b;
    echo "A divisão dos números é de $res";
}

$a = readline("Digite um número:\n ");
$b = readline("Digite outro número:\n");
$op = readline("Escolha um operador:(+, -, *, /)\n");

if( $op == "+"){
    soma($a, $b);

}

if( $op == "-"){
    sub($a, $b);

}

if( $op == "*"){
    mult($a, $b);

}
if( $op == "/"){
    if($b==0){
        echo "Erro!\n";
    }
    else{
        div($a, $b);
    }
}
