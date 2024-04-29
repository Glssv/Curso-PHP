<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio php</title>
</head>

<body>
    <header>
        <h1>trabalhando com numero aleatorios</h1> <br>
    </header>
    <main>
        <?php
            $min = 0;
            $max= 100;
            $num = mt_rand($min,$max);
            echo "<p>gerando um numero aleatorio entre $min e $max... <br>
                 O numero gerado foi <strong>$num</strong> ";
         ?>
    </main>
    <button onclick="javascript:document.location.reload()">Gerar outro numero</button>
</body>

</html>