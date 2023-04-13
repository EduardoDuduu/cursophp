<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomizador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório de 0 a 199</p>
        <?php 
            $randomNum = mt_rand($min = 0, $max = 199);
            echo "<p>O valor gerado foi <strong>$randomNum</strong></p>";
        ?>
        <button onclick="window.location.reload()"> &#x1F3B2 Gerar outro</button>
    </main>
</body>
</html>