<?php

    $pessoa = ["nome"=> "João","idade"=>30];
    echo $pessoa["nome"]."<br>";
    echo $pessoa["idade"];

?>
<p> Olá aqui é um HTML: </p>
<?php
    $aluno = ["nome"=>"Francisco", "idade"=>16,"nota"=> 100];
    $ano_atual = date('Y');
    $hoje = date('d/m/Y');
    $dia = date('d');
    $horario = date('H:i');
    $ano = $ano_atual - $aluno["idade"];
    //Olá Francisco, você tem 16 anos e sua nota é 100
    echo "Olá {$aluno["nome"]}, você tem {$aluno["idade"]} anos e sua nota é {$aluno["nota"]}"."<br>";
    echo "Olá ".$aluno["nome"].", você tem ".$aluno["idade"]." anos e sua nota é ".$aluno["nota"]."<br>";
    echo "Você nasceu no ano de $ano"."<br>";
    echo "Hoje é $hoje"."<br>";
    echo "Hoje, $dia é dia nacional da Habitação"."<br>";
    echo "São exatamente $horario"; 




?>