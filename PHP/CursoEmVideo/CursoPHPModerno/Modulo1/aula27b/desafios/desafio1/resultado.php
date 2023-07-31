<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
    <?php 
                  $númeroDigitado = $_POST["numeroDigitado"] ?? 1;
                    echo "<p>O número $númeroDigitado tem o seu antecessor ".$númeroDigitado - 1 ." e o seu sucessor é ".$númeroDigitado + 1 . ".</p>";
                ?>
    </main>
</body>
</html>