<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="get">
            <label for="">Qual é o total de segundos?</label>
            <input type="number" name="segundos">
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Totalizando tudo</h2>
            <?php 
            
            $segundos_total = $_GET['segundos'] ?? 0;
            $semanas = intdiv($segundos_total, 604800);
            $dias = intdiv(($segundos_total % 604800), 86400);
            $horas = intdiv((($segundos_total % 604800) % 86400), 3600);
            $minutos = intdiv((($segundos_total % 604800) % 86400), 3600);
            $segundos = intdiv(((($segundos_total % 604800) % 86400) % 3600), 60);
            
            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundos_total, 0, ",", ".") . " segundos</strong> equivalem a um total de: ";
            
            echo "<ul>
            <li>$semanas semanas</li>
            <li>$dias dias</li>
            <li>$horas horas</li>
            <li>$minutos minutos</li>
            <li>$segundos segundos</li>
        </ul>"

            ?>
        </section>



    </main>
</body>
</html>