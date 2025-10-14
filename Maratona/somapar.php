<?php
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
        }
    }
    echo "<h2>Soma dos números pares de 1 a 100: $soma </h2>";
?>