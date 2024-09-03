<?php
$nome = "Raphael";
//for(Contador; condição; incremento){codigo}

for($i=0; $i<10; $i++){

    if($i == 2){
        echo"$nome<br>";
    }

    if($i == 3){
        break;
    }
    echo "$i<br>";
}