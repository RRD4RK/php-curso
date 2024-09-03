<?php

$idade = $_POST["idade"];

if($idade >= 5 && $idade <= 7) {
    echo "Você é da categoria Infantil A";
}
elseif ($idade >= 8 && $idade <= 10){
    echo "Você é da categoria Infantil B";
}
elseif ($idade>=11 && $idade<=13){
    echo "Você é da categoria Juvenil A";
}
elseif($idade >=14 && $idade<=17){
    echo "Você é da categoria Juvenil B";
}
elseif ($idade >= 18){
    echo "Você é da categoria Sênior";
}