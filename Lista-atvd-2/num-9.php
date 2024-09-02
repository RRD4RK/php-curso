<?php

$num = $_POST["num"];

if ($num>=30 && $num<= 90) {
    echo "Esse número esta entre 30 e 90";
}

elseif($num >=120){
    echo "Esse número é maior que 120";
}

else {
    echo "Não se encaixa em nenhuma condição";
}