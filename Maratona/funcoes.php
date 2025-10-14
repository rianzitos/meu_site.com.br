<?php
function media($n1, $n2, $n3, $n4, $n5) {
        return ($n1 + $n2 + $n3 + $n4 + $n5) / 5;
}

function soma($n1, $n2, $n3, $n4, $n5) {
        return ($n1 + $n2 + $n3 + $n4 + $n5);
}

function delta($a, $b, $c) {
        $delta =($b**2 - 4 *$a *$c);
        return $delta;
}

function x1($a, $b, $delta) {
        return (-$b + $delta**0.5)/(2*$a);
}

function x2($a, $b, $delta) {
        return (-$b - $delta**0.5)/(2*$a);
}
