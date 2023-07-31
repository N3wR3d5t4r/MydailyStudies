<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <form action="resposta.php" method="post">
            <label for="valorDigitado">Quantos R$ você tem na carteira?</label>
            <input type="number" name="valorDigitado" id="idvalorDigitado" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>