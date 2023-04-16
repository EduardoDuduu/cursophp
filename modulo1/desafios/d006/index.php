<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 | Anatomia de uma divisão</title>
    <link rel="stylesheet" href="divisao.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $resto = $dividendo % $divisor;
        $quociente = intdiv($dividendo, $divisor);

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo" placeholder="Digite um numero!">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor" placeholder="Digite um número!">
        <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>       
        <table class="divisao">
            <tr>
                <td><?=$dividendo ?></td>
                <td><?=$divisor ?></td>
            </tr>
            <tr>
                <td><?=$resto ?></td>
                <td><?=$quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>