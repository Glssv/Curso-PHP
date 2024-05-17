<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php 
        $div1 = $_GET['d1'] ?? 0;
        $div2 = $_GET['d2'] ?? 1;
        
        ?>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="id1" required value="<?=$div1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="d2" id="id2" required value="<?=$div2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma </h2>
        <?php 
        $quo = intdiv($div1, $div2);
        $resto = $div1 % $div2;
        ?>
    </section>
    <section>
        <table class="divisão">
            <tr>
                <td><?=$div1?></td>
                <td><?=$div2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quo?></td>
            </tr>
        </table>
    </section>
</body>

</html>