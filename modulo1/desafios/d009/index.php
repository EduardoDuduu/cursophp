<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando as Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //valores e Pesos dos inputies 
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1;

        //Média Aritimética Simples
        $mas = ($valor1 + $valor2) / 2;

        //Média Aritimética Ponderada
        $somaV = ($peso1 * $valor1) + ($peso2 * $valor2);
        $somaP = $peso1 + $peso2;
        $map = $somaV / $somaP;
    ?>
    <section>
        <h1>Médias Aritiméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º Valor:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1 ?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1 ?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2 ?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2 ?>">
            <button type="submit">Calcular Médias</button>
        </form>
    </section>
    <section>
        <h2>Cálculo das Médias</h2>
        
        <?php 
            echo "
            <p>Analizando os valores $valor1 e $valor2 :</p>
            <ul>
                <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ". number_format($mas, 2, ",", ".") ."</li>
                <li>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($map, 2, ",", ".") ."</li>
            </ul>
            ";
        ?>
    </section>
</body>
</html>