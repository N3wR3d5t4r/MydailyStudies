# Anotações da aula 20 - Variáveis e Constantes
1. Para criar uma variável no PHP:
```php
    $nome = "Guanabara";
```
2. Para criar uma constante no PHP:
```php
    define("SOBRENOME","Silva");
```
3. Regras para nomes de indentificadores:

    1. Variáveis sempre começam com o símbolo `$`.
    2. O segundo pode ser letra ou símbolo `_`.
    3. Aceita caracteres `[a-z], [A-Z],[0-9]` e `[_]`.
    4. Aceita caracteres acentuados como `á`,`õ` e `ç`.
    5. Aceita caracteres ASCII a partir de 128.
    6. A linguagem é case sensitive em relação aos nomes.
    7. Nomes especiais como `$this` não podem ser usados.
4. Recomendações para dar nomes:  

    1. Tente dar nomes claros e de fácil indentificação.
    2. Evite nomes muitos curtos ou muitos longos.
    3. Defina um padrão e siga em todo o projeto.
    4. Para variáveis, dê preferência a letras minúsculas.
    5. Para constantes, dê preferência para a letras maísculas.
    6. Use camelCase para métodos e atributos.
    7. Use SNAKE_CASE para nomear constantes.
    