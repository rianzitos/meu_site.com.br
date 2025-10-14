<?php

$num = $_POST['num'];

function parOuImpar($num) {
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}
echo parOuImpar($num);
?>
<br>
<a href = "http://localhost/meu_site.com.br/Impar_par.html">Clique para voltar à página anterior</a>