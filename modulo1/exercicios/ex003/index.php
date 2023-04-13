<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal  0b = binário  0 = Octal
        // $num = 0b1011;
        // echo "O valor da variavel é $num";

        // $v = 300;
        // var_dump($v);

        // $num = (int) or (integer) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num";
        // var_dump($num);

        // $unm = "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // print "O valor para casado é $casado";

        // $vet = [6, 8.3, "Chico", 0, true];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>