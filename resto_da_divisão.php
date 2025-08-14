<?php
    $numero1 = 10;
    $numero2 = 3;
    $resto = $numero1 % $numero2;
    $divisao = $numero1 / $numero2;
    $numero_arredondado = round($divisao, 2);

    echo "A divisão entre ". $numero1. " e ". $numero2. " é ". $numero_arredondado. " e seu resto é ". $resto;
?>