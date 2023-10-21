<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz Quadrada & Raíz Cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1>Informe um número salário</h1>
        <form action="" method="$_GET">

        <label for="">Número</label>
        <input type="number" name="numero" id="">
        <input type="submit" value="Calcular Raízes">

        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        
        $numero = $_GET['numero'];

        $raiz2 = sqrt($numero);
        $raiz3 = pow($numero, (1/3));

        echo "<p>Analisando o <strong>$numero </strong>, temos:</p>";

        echo "<ul>
        <li>A sua raíz quadrada é $raiz2</li>
        <li>A sua raíz cúbica é $raiz3</li>
        </ul>"
        
        ?>
    </section>

</body>
</html>