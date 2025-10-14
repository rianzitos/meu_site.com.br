<?php
    $num = $_POST['num'];

    echo "<h2>Tabuada inversa de $num : </h2>";
    for ($i = 10; $i >= 1; $i--) {
    echo "$num x $i = " . ($num * $i) . "<br>";
    }
?>