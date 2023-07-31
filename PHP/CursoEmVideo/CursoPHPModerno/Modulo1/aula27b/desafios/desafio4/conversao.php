<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>
    <main>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            $dia = intval(date('d'));
            $dataAtual = date('m-d-Y');
            if (date('D') == 'Sun'){
                $dia-=2;
                $dataAtual = date("m-$dia-Y");
            }else if(date('D') == 'Fri'){
                $dia-1;
                $dataAtual = date("m-$dia-Y");
            }
            $real = floatval($_POST["real"] ?? 111);
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$dataAtual'&@dataFinalCotacao='$dataAtual'&\$top=100&\$format=json&\$select=cotacaoCompra";
            $conteúdos = file_get_contents($url);
            $dados = json_decode($conteúdos,true);
            echo "<pre>";
            $dólar = $dados["value"][0]["cotacaoCompra"];
            $resultadoDaConversão = $real / $dólar;
            echo "</p>O valor de R$".number_format($real, 2, ",", ".")." em Dólares é U$". number_format($resultadoDaConversão, 2, ",",".")."¹.</p>";
            echo "<p><i>¹Segundo o Banco Central na data de ".date("$dia/m/Y").".</i></p>";
            echo "</pre>";
        ?>
    </main>
</body>
</html> 

