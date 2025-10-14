<?php
    $str = $_POST['str'];

    $strInv = strrev($str);

    if ($strInv == $str) {
        echo "<h2> A palavra '$str' ao contrário fica '$strInv' </h2>";
        echo "<h2> É um palíndromo! </h2>";
    }
else{
    echo "<h2> A palavra '$str' ao contrário fica '$strInv' </h2>";
    echo "<h2> Não é um palíndromo";
}
?>