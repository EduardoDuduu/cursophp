<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de raiz quadrada e cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 0;
        // Raiz quadrada
        $rq = sqrt($num);
        // Raiz cúbica
        $rc = $num ** (1/3);
    ?>
    <section>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num ?>">
            <button type="submit">Calcular Raizes</button>
        </form>
    </section>
    <section>
        <h2>Resultado final</h2>
        <?php
            echo "<p>Analizando o numero $num, temos:</p>
            <ul>
                <li>A raiz quadrada é ". number_format($rq, 3, ",", ".") ."</li>
                <li>A raiz cúbica é ". number_format($rc, 3, ",", ".") ."</li>
            </ul>";
        ?>
    </section>
</body>
</html>