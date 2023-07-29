# Anotações da aula 24 - Interação Formulários

1. Para capturar os valores enviados de um formulário via `$_GET`:
```php
    $nome = $GET["nome"];
```
2. Para capturar os valores enviados de um formulário via `$_POST`:
```php
    $nome = $_POST["nome"];
```

3. Operador de coalescência nula:
```php
    $nome = $_GET["nome"] ?? "Sem Nome";
    $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
    echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Esse é o meu site!</p>";
```
> O operador de coalescência nula `??` serve como uma condição para caso algum valor vinher vazio. Assim vai aplicar um valor padronizado na falta de um.


