<?php
require "funcoes.php";
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $media = media($n1, $n2, $n3, $n4, $n5);
    $soma = soma($n1, $n2, $n3, $n4, $n5);
    $numeros = [$n1, $n2, $n3, $n4, $n5];
    $maior = max($numeros);
    $menor = min($numeros);

    echo "<h2>Resultado da Média</h2>";
    echo "Os números digitados foram: $n1, $n2, $n3, $n4 e $n5 <br>";
    echo "A média é: <strong>" . $media . "</strong <br><br>";
    echo "A soma é: <strong>" . $soma . "</strong <br><br>";
    echo "O maior número é $maior <br>";
    echo "O menor número é $menor";
?>
