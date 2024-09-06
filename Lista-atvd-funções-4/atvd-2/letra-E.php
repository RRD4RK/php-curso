<?php

function peso($opcao){
    global $altura;
    if($opcao == "1"){
        $pesoHomem = 72.7 *$altura-58;
        echo"Seu peso ideal é de: $pesoHomem";
    }
    if($opcao == "2"){
        $pesoMulher = 62.1 *$altura-44.7;
        echo"Seu peso ideal é de: $pesoMulher";
    }
}

$opcao = readline("Escolha seu sexo\n1-Masculino\n2-Feminino");
$altura = readline("Digite sua altura");
peso($opcao);