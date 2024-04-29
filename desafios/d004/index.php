<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de numero real</title>
</head>

<body>
    <header>
        <h1>Analisador de numero real</h1>
    </header>
    <section>
        <form action="num.php" method="post">
            <label for="numero">Numero real: </label>
            <input type="number" name="numero" id="inumero" required step="0.001">
            <input type="submit" value="Analisar">
        </form>
    </section>
</body>

</html>