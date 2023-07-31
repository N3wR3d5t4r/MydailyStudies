<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar números aleatórios</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <form action="desafio2.php">
            <p>Gerando um número aleatório entre 0 e 100...</p>
            <?php 
                echo "<p>O valor gerado foi: ".random_int(0, 100).".</p>";
            ?>
            <input type="submit" value="&#128257; Gerar Outro">
        </form>
    </main>
</body>
</html>