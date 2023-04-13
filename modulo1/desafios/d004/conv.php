<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <section>
            <?php
                // Cotação vinda da API do Banco Central;
                // Duas variáveis para injetar de forma dinâmica na URL, a data atual do servidor;
                $início = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");

                // URL da API do Banco Central do Brasil;
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                // Função para o tratamento de dados, do tipo json;
                $dados = json_decode(file_get_contents($url), true);

                // Puxando apenas o valor da cotação, de dentro da array;
                $cotação = $dados["value"][0]["cotacaoCompra"];

                // Valor colocado no input number;
                $real = $_GET["convNum"];

                // Equivalência em dólar;
                $dólar = $real / $cotação;

                // Formatação dos valores usando o método de internacionalização;
                $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                
                // Saída
                echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
            ?>
            <p>Cotação vinda do <strong>Banco Central do Brasil</strong>.</p>
        </section>
        <a href="javascript:history.go(-1)">Voltar para o início</a>
    </main>
</body>
</html>