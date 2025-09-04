<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    Login <br>
    <input type="text" name="usuario"> <br>
    Senha <br>
    <input type="password" name="senha"> <br><br>
    <input type="submit" value="Entrar"> 
</form>

<?php
// Exibe mensagem de eror, se existir
if (isset($_GET['msg'])) {
    echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>


    






</body>
</html>