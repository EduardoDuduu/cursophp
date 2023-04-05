<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador dos Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números Reais</h1>
        <?php
            $num = $_GET["n"] ?? 0;

            echo "<p>Analizando o valor <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "
            <ul>
                <li> A parte inteira do valor é <strong>". number_format($int, 0, ",", ".") ."</strong>.
                <li> A parte fracionária do valor é <strong>". number_format($fra, 3, ",", ".") ."</strong>.
            </ul>
            ";

        ?>
        <button onclick="javasript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>