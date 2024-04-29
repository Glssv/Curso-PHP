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
        <h1>Analisador de numero real:</h1> <br>
    </header>
    <main>
        <?php
            $num = $_POST["numero"] ?? 0;
            $int = (int) $num;
            $fra = $num - $int ;
            echo "<p>Anslisando o numero ". number_format($num, 3,",",".") ." informado pelo usuario: </p>";
            echo "<ul><li>A parte inteira do numero é ". number_format($int, 0, ", ",".") ." </li>";
            echo "<li>A parte fracionaria do numero ". number_format($fra, 3, ", ",".") ."</li></ul>"
         ?>
    </main>
    <button onclick="javascript:history.go(-1)">voltar para a pagina anterior</button>
</body>

</html>