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
    <title>Desafio php</title>
</head>

<body>
    <header>
        <h1>Escolha um numero</h1>
    </header>
    <section>
        <form action="resp.php" method="get">
            <label for="numero">Escolha um numero</label>
            <input type="number" name="numero" id="inumero" required>
            <input type="submit" value="Calcular">
        </form>
    </section>
</body>

</html>