<?php
    $str = $_POST['str'];
    $cont = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $letra = strtolower($str[$i]);
    if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
        $cont++;
    }
}

    echo "<h2> A palavra '$str' tem $cont vogais. </h2>";
?>