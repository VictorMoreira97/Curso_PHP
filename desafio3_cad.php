<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 3</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
        
        $valor = $_GET['valor'];

        $cotacao = 5.17;

        $dolar = $valor/$cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus R\$" . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a US\$" . number_format($dolar, 2,",", ".");
        
        ?>

        <button><a href="javascript:history.go(-1)">Voltar</a></button>

    </main>
</body>
</html>