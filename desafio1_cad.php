<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado:</h1>
    </header>

    <main>
        <?php 
            $numero = $_GET['numero'];
            
            echo "O número é $numero <br>";
            echo "O <i>antecessor</i> de ". $numero . " é ". ($numero-1). "<br>";
            echo "O <i>sucessor</i> de ". $numero . " é ". ($numero+1). "<br>"; 
        ?>

        <button><a href="javascript:history.go(-1)">Voltar à página anterior</a></button>
    </main>

</body>
</html>