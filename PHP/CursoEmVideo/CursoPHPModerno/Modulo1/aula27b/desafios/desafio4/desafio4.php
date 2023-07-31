<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda v2.0</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main>
        <form action="conversao.php" method="post">
            <label for="real">Digite quantos R$ você possui</label>
            <input type="number" name="real" id="idReal" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>