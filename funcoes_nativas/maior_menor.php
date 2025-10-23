<form method = "post">
    <label>Digite um número: </label>
        <input type = "text" name = "a" ><br><br>
    <label>Digite um número: </label>
        <input type = "text" name = "b" ><br><br>
   <label>Digite um número: </label>
        <input type = "text" name = "c" ><br><br>
    <label>Digite um número: </label>
        <input type = "text" name = "d" ><br><br>
    <label>Digite um número: </label>
        <input type = "text" name = "e" ><br><br>
    <input type = "Submit" value = "Calcular">
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];

$maior_valor = max($a, $b, $c, $d, $e); // -> Retorna o maior valor

$menor_valor = min($a, $b, $c, $d, $e); // -> Retorna o menor valor

echo "Valores comparados: $a, $b, $c, $d e $e : <br>";
echo "O maior valor é: $maior_valor e o menor valor é $menor_valor";