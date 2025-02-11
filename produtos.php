<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="index.php">Página Inicial</a>
    <a href="contato.php">Página de Contato</a>
    <h1>Lista de Produtos</h1>
    <ol>
    <?php
        for($i = 0; $i < 3; $i++)
        {
            echo "<li>Item $i</li>";
        }
    ?>
    </ol>
</body>
</html>