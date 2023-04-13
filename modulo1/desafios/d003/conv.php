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
        <h1>Conversor de Moedas v1.0</h1>
        <section>
            <?php
                // Cotação copiada do Google
                $cotação = 5.06;

                // Quanto $$ você tem?
                $real = $_GET["convNum"];

                // Equivalência em dólar
                $dólar = $real / $cotação;

                // Mostrar o resultado
                // echo "Seus R\$" . number_format($real, 2, ',', '.') . " equivalem a US\$" . number_format($dólar, 2, ',', '.');

                // Formatação de moedas com internacionalização!
                $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
            ?>
            <p>Cotação fixa em <strong>R$5,06</strong></p>
        </section>
        <a href="javascript:history.go(-1)">Voltar para o início</a>
    </main>
</body>
</html>