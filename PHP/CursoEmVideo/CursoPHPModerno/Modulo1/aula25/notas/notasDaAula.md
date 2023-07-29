# Anotações da aula 25 - Operadores Aritméticos
1. Ao contrário das outras linguagens, o operador `+` serve apenas para fazer somas, fazendo que a operação `"2" + "2"` seja `4` ao invés de `"22"`.

2. Nas versões 7 para baixo, era possível "somar" duas strings não númericas. Por exemplo:
```php
    $nome = "Gustavo" + "Guanabara";
    var_dump($nome);
``` 
Iria retornar 0, porque como o PHP não conseguiu encontrar algum número, iria transformar ambos os valores em 0 e somar.  
Na versão 8, isso foi abolido, agora dando uma mensagem de erro dizendo que não se pode somar duas strings não podem serem convertidas para números.

3. Operadores aritméticos:  
    1. `+` - Adição: `5 + 2 = 7`
    2. `-` - Subtração: `5 - 2 = 3`
    3. `*` - Multiplicação: `5 * 2 = 10`
    4. `/` - Divisão: `5 / 2 = 2.5`
    5. `%` - Módulo(Divisão inteira): `5 % 2 = 1`
    6. `**` - Potência: `5 ** 2 = 25`¹
    >¹ O Operador de potência não funcionva antes da versão 5.6 do PHP.

