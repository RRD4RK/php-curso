<?php

$preco = $_GET["preco"];

$opcao = $_GET["opcao"];

if($opcao == "opt1"){
    $res1=$preco-($preco*0.1);
    echo$res1;
}
elseif($opcao == "opt2"){
    $res2=$preco-($preco*0.95);
    echo $res2;
}

elseif($opcao == "opt3"){
    $res3= $preco;
    echo $res3;
}

elseif($opcao == "opt4"){
    $res4= $preco+($preco*0.10*3);
    echo $res4;
}