<?php
    echo "<h2> Múltiplos de 3 de 1 a 100: </h2>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo $i . "<br>";
        }
    }
?>