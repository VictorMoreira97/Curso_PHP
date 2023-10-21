<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <?php 
        
        $salario = $_GET['salario'];

        ?>

        <h1>Informe seu salário</h1>
        <form action="" method="get">
            <label for="">Salário</label>
            <input type="number" name="salario" id="" step="0.01">
            <p>Considerando o salário mínimo R$1380,00</p>
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h2>Resultado Final</h2>
            <?php 
            
            $total = intdiv($salario, 1380);
            $resto = $salario%1380;

            echo "<p>Quem recebe um salário de R$". $salario
. " ganha $total salários mínimos + R$" . $resto . "</p>";
            ?>
        </section>

    </main>
</body>
</html>