<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interações com Formulários</title>
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
        <section>
            <form action="cadastro.php" method="get">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="idnome">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="idsobrenome">
                <input type="submit" value="Enviar">
            </form>
        </section>
    </header>
</body>
</html>