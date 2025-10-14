<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > $num2 && $num1 > $num3){
        echo "<h2> O maior número é o $num1 </h2>";
    }
    if ($num2 > $num1 && $num2 > $num3) {
        echo "<h2> O maior número é o $num2 </h2>";
    }
    if ($num3 > $num1 && $num3 > $num2){
        echo "<h2> O maior número é o $num3 </h2>";
    }
?>