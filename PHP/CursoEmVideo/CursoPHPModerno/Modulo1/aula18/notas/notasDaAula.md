# Anotações da Aula 18 - Script PHP por dentro

1. Antigamente uma das formas de se incorporar o PHP no HTML era dessa maneira:
```html
    <script language="php">
        echo "Olá, mundo!";
    </script>
```

2. Outras formas de incorporar o PHP ao HTML:  
    1. Super Tag PHP(Usada atualmente):
    ```php
        <?php
            echo "Olá, Mundo!";
        ?>
    ```
    2. Short open tag(Não funciona mais):
    ```php
        <?
            echo "Olá, Mundo!"; 
        ?>
    ```
    3. ASP tag(Só funciona atualmente configurando o arquivo `php.ini`):
    ```php
        <% 
            echo "Olá, Mundo!";
        %>
    ```
    4. short tag PHP(quando há só um comando):
    ```php
        <?= echo "Olá, Mundo! "?>
    ```
    > _Como é um único comando, não há nescessidade de adicionar `;` no final._  
    
3. Para manipular dadas no PHP:  
    1. Para extrair o dia:
    ```php
        echo "Hoje é dia".date("d");
    ```
    2. Para extrair o mês:
    ```php
        echo "Estamos no mês ".date("M");
    ```
    3. Para extrair o ano:
    ```php
        echo "Estamos no ano ".date("Y");
    ```
    4. Para extrair o dia da semana:
    ```php
        echo "Estamos no dia ".date("D")." da semana.";
    ```
    5. Para mostrar a hora:
    ```php
        echo "A hora atual é ".date("G:i:s");
    ```
    >  _Obs: `G` é a hora, `i` é o minuto e `s` o segundo._
    6. Para configurar o horário do servidor:
    ```php
        date_default_timezone_set("America/Sao_Paulo");
    ```
    
