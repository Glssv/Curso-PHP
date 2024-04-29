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
            $num = $_GET["numero"];
            $ant = intdiv("numero");
            $sus = $_GET["numero"] +1;
            echo "<p>Analisando o numero <strong>$num</strong> que foi informado pelo usuario <br>
                     A parte <em>inteira</em> do numero é $ant <br>
                     A parte <em>fracionaria</em> do nuemro é $sus </p>";
         ?>
    </main>
</body>

</html>