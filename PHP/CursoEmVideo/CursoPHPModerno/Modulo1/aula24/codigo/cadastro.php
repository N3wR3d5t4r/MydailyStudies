<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
        <main>
            <?php 
                $nome = $_GET["nome"] ?? "John";
                $sobrenome = $_GET["sobrenome"] ?? "Doe";
                echo "<p>É um prazer lhe conhecer $nome $sobrenome!</p>";
            ?>
        </main>
    </header>
</body>
</html>