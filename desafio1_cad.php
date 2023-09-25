<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultados: </h1>
    </header>

    <main>
        <?php 
            $numero = $_GET['numero'];

            echo "O número é $numero"."\n";
            echo "O antecessor é ". ($numero-1)."\n";
            echo "O sucessor é ". ($numero+1)."\n";

        ?>
    </main>

</body>
</html>