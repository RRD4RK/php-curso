<?php

function velocidadeMaxima($vel){

    if (is_int( $vel )){
        echo "O carro atinge a velocidade máxima de $vel km/h<br>";
    }
    else{
        echo "Por favor, passe um número inteiro<br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

//Não pode
//velocidadeMaxima();

echo"Teste continuando<br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

//PHP ignora parâmetro desncessário;
velocidadeMaxima(200, /*"Teste"*/);

velocidadeMaxima("Teste");

//Mais parâmetros
function descreverAnimal($nome, $raca){
    echo "O $nome é da raça $raca<br>";
}

descreverAnimal("Bob", "Vira-lata");
descreverAnimal("Shark","Pastor alemão");
descreverAnimal("Podle","Tita");