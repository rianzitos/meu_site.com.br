<?php
    $num =  $_POST['num'];

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado<br>";
    }
?>