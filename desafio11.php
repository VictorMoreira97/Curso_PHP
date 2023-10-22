<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php 
        
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
        
        ?>

    <main>
        <h1>Reajuste de Preços</h1>
        <form action="" method="get">

        <label for="">Preço do Produto (R$)</label>
        <input type="number" name="preco" id="" min="0.0" step="0.01">

        <label for="">Qual será o percentual de reajuste? (<strong><span id="p">50</span>%</strong>)</label>
        <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()">

        <input type="submit" value="Reajustar">

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        
        $percent = $percentual/100;
        $aumento = $preco + ($preco * $percent);

        echo "<p>O produto que custava R$". number_format($preco, 2, ",", ".") . " com " . $percentual . "% de aumento vai passar a custar R$" . number_format($aumento, 2, ",", ".") . "a partir de agora.</p>";
        
        ?>
    </section>

        </form>
    </main>
<script>
    function mudaValor() {
        p.innerText = percentual.value;
    }
</script>

</body>
</html>