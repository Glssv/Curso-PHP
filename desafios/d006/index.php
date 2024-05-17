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
        $min = 1_412.00;
        $sal = $_GET['sal'] ?? 0;
        
        ?>
        <h1>informe seu salario</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salario(R$)</label>
            <input type="number" name="sal" id="sal" required value="<?=$sal?>" step="0.01">
            <p>considerando um salario minimo de R$<?=number_format($min,2,",",".")?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
        $tot = intdiv($sal, $min);
        $dif = $sal % $min;
        
        echo "<p> Quem recebe um salario de R\$" . number_format($sal,2,",","."). " ganha $tot salarios minimos + R\$ ". number_format($dif,2,",","."). ".</p>";
        ?>
    </section>

</body>

</html>