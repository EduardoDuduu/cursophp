<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <section>
            <?php
                $_num = $_GET["num"] ;
                $_ant = $_num - 1;
                $_suc = $_num + 1;
                echo "<p>O número escolhido foi <strong>$_num</strong>.</p>";
                echo "<p>Seu antecessor é $_ant.</p>";
                echo "<p>E seu sucessor é $_suc.</p>";
            ?>
        </section>
        <a href="javascript:history.go(-1)">Volte para o inicio</a>
    </main>
</body>
</html>