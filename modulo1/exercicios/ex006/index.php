<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Some dois valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$v1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$v2 ?>">
            <button type="submit">Somar</button>
        </form>
    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
        $soma = $v1 +$v2;
        print "<p>O resultado da soma entre $v1 e $v2 é <strong>$soma</strong></p>"
        ?>
    </section>
</body>
</html>