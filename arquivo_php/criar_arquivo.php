<?php
    $arquivo=fopen("Dados.txt","w");
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    echo "Arquivo alterado com sucesso!";
?>