<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 2</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórioss</h1>
        <p>Gerando um número aleatório entre 1 e 4096</p>

        <?php 
        
        $resultado = mt_rand(1, 4096);
        echo "O valor gerado foi <strong>$resultado</strong>";
        
        ?>
        <button onclick="javascript:document.location.reload()" type="submit">&#x1f504; Gerar outro</button>
    </main>
</body>
</html>