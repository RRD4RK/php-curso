<?php

class Pessoa{
    function falar(){
        echo "olá pessoal!";
    }

}

$raphael= new Pessoa();
$raphael->nome= "Raphael";

echo $raphael->nome;

echo "<br>";

$raphael -> falar();