<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>

<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Bem vindo(a) ao fandom!</p>";
        ?>
    </main>
</body>

</html>