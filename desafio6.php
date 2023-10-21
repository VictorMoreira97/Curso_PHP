<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    //capturando os dados do Formulário Retroalimentado
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 0;

    ?>

    <main>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" value="<?=$dividendo?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="v2" value="<?=$divisor?>">
        <input type="submit" value="Dividir"> 
    </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 

        if ($divisor != 0) {
            $quociente = intdiv($dividendo, $divisor);
            $resto =  $dividendo % $divisor;

        } else {
            echo "Não é possível dividir por 0";
        }
        
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>