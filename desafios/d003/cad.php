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
            $val = $num / 5.12;
            $padrão = numFmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus ". numFmt_format_currency($padrão,$num, "BRL"). " equivalem a ". numfmt_format_currency($padrão, $val, "USD"). "</p>";
         ?>
    </main>
    <button onclick="javascript:history.go(-1)">voltar para a pagina anterior</button>
</body>

</html>