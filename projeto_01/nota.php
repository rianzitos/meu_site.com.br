<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de nota</title>
</head>
<body>
    <form action = "calcula_nota.php" method ="post">
        <h2>Validação de nota</h2>
        <label>Digite a disciplina: </label>
        <p><input type = "text" name = "disciplina" required></p>
        <label>Digite sua nota: </label>
        <p><input type = "number" name = "nota" required></p>
        <input type="submit" value="Verificar validação">
    </form>
</body>
</html>