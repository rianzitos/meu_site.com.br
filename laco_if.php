<?php
    $resposta ="sim";
    $pergunta = "Sua mãe deixou você ir ao MCdonalds?";

    if($resposta == "sim"){
    echo "O rolê está ON";
    }else { 
        echo "Hoje não tera rolê";
    }

    echo "<br>";

    $numero1 = 100;
    $numero2 = 200;

    if($numero1 > $numero2){
        echo "O ". $numero1. " é maior que ". $numero2;
    }

    if($numero1 == $numero2){
        echo "O $numero1 é igual a $numero2";
    }
    if($numero1 < $numero2){
        echo "O $numero1 é menor que o $numero2";
    }
?>