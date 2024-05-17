<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Apresente-se para nós little dreamer</h1>
    </header>
    <main>
        <?php 
        $val1 = $_GET['v1'] ?? 0;
        $val2 = $_GET['v2'] ?? 0;
        
        ?>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Digite o primeiro valor</label>
            <input type="number" name="v1" id="iv1" required value="<?=$val1?>">
            <label for="v2">Digite o segundo valor</label>
            <input type="number" name="v2" id="iv2" required value="<?=$val2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma </h2>
        <?php 
        $soma= $val1 + $val2;
        echo "<p>A soma entre os valores $val1 e $val2 é $soma </p>"
        ?>
    </section>
</body>

</html>