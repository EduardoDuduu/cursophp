<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //ano de Nascimento
        $ano1 = $_GET['an'] ?? (date('Y')-1);
        //ano atual
        $ano2 = $_GET['ae'] ?? date('Y');

        $resAno = $ano2 - $ano1;
    ?>

    <section>
        <h2>Resultado</h2>
        <?="<p>Quem nasceu em $ano1 e vai ter <strong>$resAno anos</strong> em $ano2 !</p>" ?>
    </section>

    <section>
        <h1>Calculando a sua idade</h1>
        
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="an">
                Em que ano você nasceu?
            </label>
            <input type="number" name="an" id="an" require placeholder="Se vazio será considerado o ano anterior ao atual!">
            
            <label for="ae">
                Quer saber sua idade em que ano? ( Atualmente estamos em 
                <strong> <?=date('Y') ?> </strong>)
            </label>
            <input type="number" name="ae" id="ae" value="<?=date('Y') ?>">
            
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </section>
    
   
</body>
</html>