<?php
    $a = 10;
    $b = 5;
    echo $a + $b. "<br>"; //15
    $resto = $a % $b;

    echo "Soma: " . $a. "+". $b. "=".$a + $b."<br>"; //Soma: 10+5=15
    $resultado1= $a-$b;
    $resultado2= $a*$b;
    $resultado3= $a/$b;
    echo "Subtração: " . $a. "-". $b. "=".$resultado1."<br>";
    echo "Multiplicação: "  . $a. "*". $b. "=".$resultado2."<br>";
    echo "Divisão: " . $a. "÷". $b. "=".$resultado3;
?>