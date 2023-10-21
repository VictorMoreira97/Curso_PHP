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

        <h1>Informe dois números: </h1>
        <form action="" method="$_GET">

        <label for="">1º Número</label>
        <input type="number" name="numero1" id="">
        <label for="">Peso do 1º Número:</label>
        <input type="number" name="peso1" id="">

        <label for="">2º Número</label>
        <input type="number" name="numero2" id="">
        <label for="">Peso do 2º Número</label>
        <input type="number" name="peso2" id="">

        <input type="submit" value="Calcular Médias">

        </form>

    </main>

    <section>
        <h2>Médias</h2>
        <?php 
        
        $valor1 = $_GET['numero1'] ?? '';
        $valor2 = $_GET['numero2'] ?? '';
        $peso1 = $_GET['peso1'] ?? '';
        $peso2 = $_GET['peso2'] ?? '';


        $media = ($valor1 + $valor2)/2;
        $mediap = (($valor1 * $peso1) + ($valor2 * $peso2))/($peso1 + $peso2);
        
        echo "<ul>
        <li>Média Aritimética: $media</li>
        <li>Média Ponderada: $mediap</li>
    </ul>";
        ?>
    </section>

    

</body>
</html>