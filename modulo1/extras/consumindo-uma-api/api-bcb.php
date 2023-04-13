<?php
    // Duas variáveis para injetar de forma dinâmica na URL, a data atual do servidor.
    $início = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    // URL da API do Banco Central do Brasil;
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    // Função para o tratamento de dados, do tipo json;
    $dados = json_decode(file_get_contents($url), true);

    // var_dump($dados);

    // Puxando apenas o valor da cotação, de dentro da array;
    $cotação = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cotação";
?>