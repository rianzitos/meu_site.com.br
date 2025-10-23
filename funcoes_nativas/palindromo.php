<form method = "post">
    <h1> Veja se um texto é um palíndromo </h1>
    <label>Digite um texto: </label>
        <input type = "text" name = "texto" ><br><br>
    <input type = "Submit" value = "Inverter">
</form>

<?php
    $texto = $_POST['texto']  ?? '';;
    $textoinv = strrev($texto)  ?? '';;

if (!empty($texto) && !empty($textoinv)) {
    echo "Seu nome invertido é $textoinv <br>";
    if ($texto == $textoinv) {
        echo "É um palíndromo";
    } else{
        echo "Não é um palíndromo";
    }
}