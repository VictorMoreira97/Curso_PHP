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
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "Vazio";
            $email = $_GET["email"] ?? "Vazio";
            echo "<p>Bem-vind@, $nome</p><br>";
            echo "<p>Seu email é: $email</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página inicial</a></p>
    </main>
</body>
</html>