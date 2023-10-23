<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="" method="get">
            <label for="">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="" step="5">
            <label for="">*Notas disponpiveis: 100, 50, 10, 5</label>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$ realizado</h2>
        <?php 
        
        $valor = $_GET['valor'] ?? 0;
        $cem = intdiv($valor, 100);
        $cinquenta = intdiv(($valor % 100), 50);
        $dez = intdiv((($valor % 100) % 50), 10);
        $cinco = intdiv(((($valor % 100) % 50) % 10), 5);

        echo "<ul>
        <li>R$100 x$cem</li>
        <li>R$50 x$cinquenta</li>
        <li>R$10 x$dez</li>
        <li>R$5 x$cinco</li>
        </ul>";
        
        ?>
    </section>

</body>
</html>