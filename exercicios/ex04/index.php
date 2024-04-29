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
    <title>Formularios em php</title>
</head>

<body>
    <header>
        <h1>Apresente-se para nós little dreamer</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="inome" required>
            <label for="sobrenome">sobrenome</label>
            <input type="text" name="sobrenome" id="isobrenome" required>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>

</html>