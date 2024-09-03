<?php

$Num1 = $_POST["Num1"];

if($Num1>10){
    echo "É maior que 10!";
}

elseif($Num1== 10){
    echo "É igual a 10!";
}

else{
    echo"Não é maior que 10!";
}

