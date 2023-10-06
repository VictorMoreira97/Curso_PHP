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
        
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $valor = $_GET['valor'];
    
            $dolar = $valor/$cotacao;
    
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    
            echo "Seus R\$" . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a US\$" . number_format($dolar, 2,",", ".");
            
        
        ?>

        <button><a href="javascript:history.go(-1)">Voltar</a></button>

    </main>
</body>
</html>