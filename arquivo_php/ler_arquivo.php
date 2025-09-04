<?php
    $arquivo= fopen("Dados.txt","r");
    while(!feof($arquivo)){
        echo fgets($arquivo)."<br>";
    }
    fclose($arquivo);
?>