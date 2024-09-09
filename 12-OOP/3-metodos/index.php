<?php

 class Pessoa{

    function falar(){
        echo "Olá, eu sou um objeto<br>";
    }
     function somar($x, $y){
        echo $x+$y . "<br>";
     }
}

 $raphael = new Pessoa;

 $raphael  ->falar();
 $raphael ->falar();

 $pedro = new Pessoa;
 $pedro -> falar();

 $raphael->somar(4,5);

 $pedro->somar(10,12);