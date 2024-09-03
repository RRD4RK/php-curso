<?php

$Nota1 = $_POST["Nota1"];
$Nota2 = $_POST["Nota2"];

$media = ($Nota1+$Nota2)/2;

if($media>6){
    echo"O aluno esta aprovado e passou com a media de $media";
}

else{
    echo "O aluno esta reprovado e ficou com a media de $media";
}