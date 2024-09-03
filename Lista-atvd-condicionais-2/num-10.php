<?php

$valorProd = $_POST["prod"];

if($valorProd<=20){
    $res1 = $valorProd - ($valorProd*0.45);
    echo "O valor do lucro e de R$$res1";
}

elseif($valorProd > 20){
    $res2 = $valorProd - ($valorProd*0.3);
    echo "O valor do lucro é de R$$res2";
}
