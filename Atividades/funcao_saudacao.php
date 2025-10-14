<?php
    //Está é uma função
    //Início da função saudação
    function saudacao($nome) {
    
        return "Olá, $nome";
    }
    // Fim da função saudação


    echo saudacao("Maria")."<br>";
    echo "-----------------------------"."<br>";

    //Definição da função
    function nomedaFuncao($parametro1, $parametro2) {
        $resultado = $parametro1 + $parametro2;
        return $resultado; //retorna um valor
    }
    // Chamando a função
    $soma = nomedaFuncao(5, 10);
    $frase = saudacao("Maria");
    echo "$frase , o resultado é: $soma";
?>