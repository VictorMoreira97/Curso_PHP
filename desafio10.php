<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $atual = date("Y");
    $nasc = $_GET['nascimento'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;

    ?>
    <main>
        <h1>Calcular idade</h1>
        <form action="" method="get">
            <label for="">Ano de nascimento:</label>
            <input type="number" name="nascimento" id="" min="1900" max="<?$atual?>">

            <label for="">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id=""min="1900" max="<?$atual?>">

            <input type="submit" value="Calcular idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>

        <?php
        
        $idade = $ano - $nasc;

        echo "<p>Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano</p>"
        
        ?>
        
    </section>
</body>
</html>