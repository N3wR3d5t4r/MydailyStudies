# Notas da aula 22 - Strings PHP

1. double quoted:
    ```php
        echo "Curso"."PHP";
    ```
    ou

    ```php
        echo "Curso de $curso.";
    ```
    > Com as aspas duplas, há uma intepretação do conteúdo. E sua concatenação é usada com o `.`.
2. single quoted:
    ```php
        echo 'PHP \u{1F418}';
    ```
    > Com aspas simples, ele exibe o contéudo de forma literal.
3. Heredoc:
    ```php
    $teste = "Olá, Mundo!";
    echo <<<CURSO
    Queria dizer ao mundo 
        $teste
            mas infelizmente a sociedade não aceita
                pessoas felizes
                \u{1F596}
    CURSO;
    ```
    > Ele tem o mesmo resultado de usar aspas duplas, só que em multiplas linhas.
4. Nowdoc:
    ```php
    $teste = "Olá, Mundo!";
    echo <<<'CURSO'
    Queria dizer ao mundo 
        $teste
            mas infelizmente a sociedade não aceita
                pessoas felizes
                \u{1F596}
    CURSO;
    ```
    > Ele possui o mesmo efeito de usar aspas simples, só que em multiplas linhas.