<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("esta-frio", "true", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo '<h1>Super Global $_GET</h1>';
                var_dump($_GET);

                echo '<h1>Super Global $_POST</h1>';
                var_dump($_POST);

                echo '<h1>Super Global $_REQUEST</h1>';
                var_dump($_REQUEST);

                echo '<h1>Super Global $_COOKIE</h1>';
                var_dump($_COOKIE);

                echo '<h1>Super Global $_FILES</h1>';
                var_dump($_FILES);
                
                echo '<h1>Super Global $_SESSION</h1>';
                var_dump($_SESSION);
                
                echo '<h1>Super Global $_ENV</h1>';
                var_dump($_ENV);
                // foreach (getenv() as $c => $v) {
                //     echo "<br>$c -> $v";
                // }
                
                echo '<h1>Super Global $_SERVER</h1>';
                var_dump($_SERVER);
                
                echo '<h1>Super Global $GLOBALS</h1>';
                var_dump($GLOBALS);
                
            ?>
        </pre>
    </main>
</body>
</html>