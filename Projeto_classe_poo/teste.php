<?php
//Importando as classes
require_once "Usuario.php";
require_once "Professor.php";
require_once "Aluno.php";

// Criando objetos
$professor1 = new Professor("Wellinton", "ton@gmail.com", "HTML");
$professor2 = new Professor("Ricardo", "ricardo@gmail.com", "PHP");

$aluno1 = new Aluno("Rian Rafael", "rian@aluno.com", "2025A001");
$aluno2 = new Aluno("John Bloodborne", "john@aluno.com", "2025A001");

//Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->darAula() . "<br><br>";

//Exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";
?>