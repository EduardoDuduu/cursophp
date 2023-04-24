<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
    <script>
        const value = document.querySelector("#value")
        const input = document.querySelector("#pi_input")
        value.textContent = input.value
        input.addEventListener("input", (event) => {
        value.textContent = event.target.value
        })
    </script>
</head>
<body>
    <?php 
        $preco = $_GET['pp'] ?? 0;
        $reajuste = $_GET['pr'] ?? 1;
        //Cálculo
        $calculo = ($reajuste / 100) * $preco;
        $res = $preco + $calculo;
    ?>
    <section>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="pp">Preço do Produto (R$):</label>
            <input type="number" name="pp" id="pp" required>
            <label for="pr">Qual será o percentual de reajuste?</label>(<output>24</output>%) 
            
            <input type="range" value="24" min="1" max="100" oninput="this.previousElementSibling.value = this.value">
            <input type="submit" value="Reajustar">
            
        </form>
    </section>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?="<p>O produto que custava $preco, com <strong>$reajuste% de aumento</strong> Vai passar a custar <strong>$res</strong> a partir de agora.</p>" ?>
    </section>
</body>
</html>