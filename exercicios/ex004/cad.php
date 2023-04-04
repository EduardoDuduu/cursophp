<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            // $_REQUEST = $_GET + $_POST + $_COOKIS;
            $name = $_GET["nome"] ?? "sem nome";
            $sname = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer te conhever <strong>$name $sname</strong>. Boas vindas ao meu site!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>