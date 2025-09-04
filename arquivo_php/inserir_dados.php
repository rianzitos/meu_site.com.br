<?php
    $arquivo=fopen("Dados.txt","a");
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    echo "Arquivo alterado com sucesso!";
?>