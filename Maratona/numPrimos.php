<?php
    echo "<h3>Números primos de 1 a 50: <h3>";

    for ($num = 2; $num <= 50; $num++) {
    $primo = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo "$num <br>";
    }
}
?>
