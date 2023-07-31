<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            $númeroDigitado = $_POST["valorDigitado"];
            $valorEmDólar = $númeroDigitado / 5.22;
            echo "<p>O valor R&#36;$númeroDigitado em Dólar é U&#36;".number_format($valorEmDólar, 2, ',', '.').".</p>";
        ?>
    </main>
</body>
</html>