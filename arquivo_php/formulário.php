<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="formulário.php" method="post">
        <label> Nome da pessoa a ser atendida: </label>
        <p><input type="text" name="cliente" id="nome"></p>
        <p><input type="submit" value="Atender"></p>
    </form>
    <h3> Lista de atendimento <h3>
    <?php
    $nome_atendimento = $_POST['cliente'] ??'';
    $arquivo=fopen("Atendimento.txt","a");
    fwrite($arquivo, "$nome_atendimento\n");
    fclose($arquivo);

    $arquivo= fopen("Atendimento.txt","r");
    while(!feof($arquivo)){
        echo fgets($arquivo)."<br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>
