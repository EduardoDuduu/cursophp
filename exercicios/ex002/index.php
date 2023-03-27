<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Escape Pt.1</title>
</head>
<body>
    <h1>Sequência de Escape</h1>
    
    <p>Sequências de escape servem para mostrar, caracteres que seriam interpretados pelo PHP como caracteres reservados, e também executar comandos específicos na interpretação do PHP</p>

    <?php 
    echo "
    \\n Nova linha
    <br>
    \\t Tabulação
    <br>
    \\\ Barra invertida
    <br>
    \\$ Sinal de cifrão
    <br>
    \\u{} Codepoite Unicode
    <br>";

    echo '\\" Aspas duplas';
    
    echo "
    <br>
    \' <- Só funciona com aspas simples!";
    ?>
</body>
</html>