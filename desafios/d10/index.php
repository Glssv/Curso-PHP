 <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio php</title>
    <style>
        img.nota{
            height: 50px;
        }
    </style>
</head>

<body>
    <main>
     <?php 
        $saque = $_GET['saque'] ?? 0;
    
     ?>
    <h1>caixa eletronico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">qual valor você deseja sacar?</label>
            <input type="number" name="saque" id="isaque" required value="<?= $saque?>" step="5">
            <p>
                Notas disponiveis: RS$100, RS$50, RS$10, RS$5  
            </p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            $sobra = $saque;

            $tot100 = floor($sobra / 100);
            $sobra = $sobra % 100;
            
            $tot50 = (int)($sobra / 50);
            $sobra = $sobra % 50;

            $tot10 = (int)($sobra / 10);
            $sobra = $sobra % 10;

            $tot5 = (int)($sobra / 5);
            $sobra = $sobra % 5;

    

         ?>
        <h2>saque de R$ <?=$saque?> realizado</h2>
        <p>o caixa eletronico vai te entregar as seguintes notas: </p>
        <ul>
            <li>  <img src="img/100-reais.jpg" alt="" class="nota" > x <?=$tot100?></li>
            <li>  <img src="img/50-reais.jpg" alt="" class="nota" > x <?=$tot50?></li>
            <li>  <img src="img/10-reais.jpg" alt="" class="nota" > x <?=$tot10?> </li>
            <li> <img src="img/5-reais.jpg" alt="" class="nota" > x <?=$tot5?> </li>
        </ul>
    </section>
</body>

</html>