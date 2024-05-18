 <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio php</title>
</head>

<body>
    <main>
     <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;
     ?>
    <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Primeiro valor</label>
            <input type="number" name="v1" id="iv1" required value="<?= $v1 ?>" step="0.01">
            <label for="p1">Primeiro peso</label>
            <input type="number" name="p1" id="ip1" required value="<?= $p1 ?>" step="0.01">
            <label for="v2">Segundo valor</label>
            <input type="number" name="v2" id="iv2" required value="<?= $v2 ?>" step="0.01">
            <label for="p2">Segundo peso</label>
            <input type="number" name="p2" id="ip2" required value="<?= $p2 ?>" step="0.01">
            <input type="submit" value="Calcular médias">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            $ma = ($v1 + $v2) / 2;
            $mp = ($p1 + $p2) != 0 ? ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2) : 0;
        ?>
        <h2>Cálculo das médias</h2>
        <p>Analisando os valores <?= $v1 ?> e <?= $v2 ?>:</p>
        <ul>
            <li>A média aritmética <strong>simples</strong> entre os valores é igual a <?= number_format($ma, 2, ",", ".") ?>.</li>
            <li>A média aritmética <strong>ponderada</strong> com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($mp, 2, ",", ".") ?>.</li>
        </ul>
    </section>
</body>

</html>