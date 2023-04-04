<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritiméticas no PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Expressões Aritiméticas</h1>
    </header>
    <main>
        <!--
            Ordem de Precedência
            () <- modificador da ordem
            ** (potrências)
        
            *(multiplicação) /(divisão) %(resto da divisão)
        
            +(adição) -(subitração)
        -->
        <?php
            $_exp = 50 / 2 + 3 ** 2;
            echo "O resultado é $_exp";
        ?>
    </main>
</body>
</html>