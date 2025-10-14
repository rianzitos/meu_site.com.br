<?php
$n1 = 1;
$n2 = 1;
echo $n1 . "<br>";
echo $n2 . "<br>";

for ($i = 3; $i <= 10; $i++){
    $n3 = $n1 + $n2;

    echo $n3 . "<br>";

    $n1 = $n2;
    $n2 = $n3;
}