<?php

$idade = $_POST["idade"];

$CNH = 2024 - $idade;
$voto =  2024 - $idade;

if($CNH>=18){
    echo "Parabéns você ja pode votar tirar a CNH e ser preso porque já tem $CNH anos";
}

elseif($voto>=16){
    echo "Parabéns voce so pode votar porque tem $voto anos";
}

else{
    echo "Você ainda nao pode fazer nada somente esperar";
}

?>