<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <!-- Essa forma de escrever em php, foi descontinuada apartir da verção 7.
        <script language="php">
            $nome = "Eduardo de Oliveira";
            echo "<p>O meu nome é $nome</p>";
        </script>
    -->

    <!-- O formato abaixo, é o mais atual de escrever em PHP. -->
    <?php $nome = "Eduardo de Oliveira";?>

    <?= "<p>O meu nome é $nome.</p>";?>
</body>
</html>