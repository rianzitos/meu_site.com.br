<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h1> Sorteio de uma rifa </h1>
        <label> Coloque o prêmio: </label>
            <input type = "text" name = "premio"><br><br>
        <input class="botao" type="submit" value="Sortear">
    </form>
</body>
</html>

<?php
    $premio = $_POST['premio'];
    $rifaprem = rand(1,1000);
    $dataatual = date("d/m/Y");
    $horaatual = date("H:i:s");

if (!empty($premio)){
    echo "<br>";
    echo "<section>";
    echo "<h1> Prêmio: </h1>";
    echo "<h2> $premio </h2> <br>";
    echo "<h1> Rifa premiada: </h1>";
    echo "<h2> $rifaprem <h2> <br>";
    echo "<h1> Data e hora da premiação: </h1>";
    echo "<h2>$dataatual às $horaatual </h2>";
    echo "</section>";
}