<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 | Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <section>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo" placeholder="Digite um numero!">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor" placeholder="Digite um número!">
        <input type="submit" value="Analisar">
        </form>
    </section>
    <section>
        <h2>Estrutura da Divisão</h2>
        <!--
        <table class="divisao">
            <tr>
                <td>00</td>
                <td>00</td>
            </tr>
            <tr>
                <td>00</td>
                <td>00</td>
            </tr>
        </table>
        -->
        <?php 
            echo "
                <p>O dividendo é $dividendo.</p>
                <p>O divisor é $divisor.</p>
                <p>O quociente é ". $dividendo/$divisor ."</p>
                <p>O resto da divisão é ". $dividendo%$divisor ."</p>
            ";
        ?>
    </section>
</body>
</html>