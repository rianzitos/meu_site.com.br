<?php
    $idade= 20;
    $temCarteira = true;

    if ($idade >= 18 && $temCarteira) {
        echo "Pode dirigir.";}

    if ($idade < 18 && $temCarteira) {
        echo "Não pode dirigir, precisa fazer 18 anos";
    }
    
    if ($idade < 18 && $temCarteira == false) {
        echo "Não pode dirigir, precisa fazer 18 anos e tirar carteira";
    }
    if ($idade >= 18 && $temCarteira == false) {
        echo "Não pode dirigir, precisa tirar carteira";
    }
    ?>