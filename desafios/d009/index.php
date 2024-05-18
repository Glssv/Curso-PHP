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
        $p1 = $_GET['p1'] ?? 0;
        $rea = $_GET['rea'] ?? 0;
     ?>
    <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="p1">Preço do produto (R$)</label>
            <input type="number" name="p1" id="ip1" required value="<?= $p1 ?>" min="0.10" step="0.01">

            <label for="rea">Qual será o percentual do reajuste? (<strong> <span id="p"><?= $rea ?></span>%</strong> ) </label>
            <input type="range" name="rea" id="irea" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $rea ?>">

            <input type="submit" value="reajustar">
        </form>
    </main>

    <section>
        <?php 
            $aumento = ($p1 * $rea) / 100;
            $novo = $p1 + $aumento;
        ?>
        <h2>resultado do reajuste </h2>
        <p>O produto que custava R$<?= number_format($p1, 2, ',', '.') ?>, com <?= $rea ?>% de aumento, vai passar a custar <strong>R$<?= number_format($novo, 2, ',', '.') ?></strong> a partir de agora.</p>
        
    </section>
    <script>
        function mudaValor() {
            const p = document.getElementById('p');
            const rea = document.getElementById('irea');
            p.innerText = rea.value;
        }
    
        mudaValor();
    </script>
</body>

</html>
