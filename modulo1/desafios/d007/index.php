<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora de Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Formatador de valores monetários
        $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    
        // Salário Minimo no dia 15 de Abril de 2023
        $salMin = 1302;
    
        // Valor do input number
        $sal = $_GET['sal'] ?? 0;

        // Quantidade de Salários Mínimos
        $qsm = intdiv($sal, $salMin);

        // Qunato Falta?
        $multi = $qsm * $salMin;
        $qf = $sal - $multi;
    ?>
    <section>
        <h1>Informae seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01" placeholder="Insira seu salário Ex: R$ 0000,00">
            <button type="submit">Calcular</button>
        </form>
        <p>Considerando o salário mínimo <strong>R$ 1.302,00</strong></p>
        <p><u>Data: 15 de Abril de 2023</u></p>
    </section>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Quem recebe um salário de ". numfmt_format_currency($default, $sal, "BRL") ." ganha <strong>$qsm salários minimos</strong> +  ". numfmt_format_currency($default, $qf, 'BRL') .".</p>";
        ?>
    </section>
</body>
</html>