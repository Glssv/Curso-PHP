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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
        
        ?>
        <h1>calculando sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">em que ano você nasceu?</label>
            <input type="number" name="nasc" id="inasc" required value="<?=$nasc?>" min="1900" max="<?= $ano?>"> 
            <label for="ano">quer saber sua idade em que ano? (atualmente estamos em <strong><?= $atual ?></strong> )</label>
            <input type="number" name="ano" id="iano" required value="<?=$ano?>" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
            $idade = $ano - $nasc;
        ?>
        <h2>resultado</h2>

        <p>quem nasceu em <?= $nasc?> vai ter <strong> <?= $idade?> anos</strong>< em <?= $ano?>/p>
    </section>

</body>

</html>