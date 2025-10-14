<?php
    $num = $_POST['num'];
    $num2 = $_POST['num2'];
    
    while ($num2 != 0) {
        $resto = $num % $num2;
        $num = $num2;
        $num2 = $resto;
    }

    echo "O MDC é: $num\n";
?>