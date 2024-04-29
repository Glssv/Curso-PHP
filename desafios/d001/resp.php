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
        <h1>resultado do final:</h1> <br>
    </header>
    <main>
        <?php
            $num = $_GET["numero"] ?? 0;
            $ant = $num -1;
            $sus = $num +1;
            echo "<p>O numero escolhido foi <strong>$num</strong> <br>
                     O numero <em>antecessor</em> é $ant <br>
                     O numero <em>sucessor</em> é $sus </p>";
         ?>
    </main>
    <button onclick="javascript:window.location.href='index.php'"> Voltar</button>
</body>

</html>