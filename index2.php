<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando scripsts PHP</title>
</head>
<body>
    <h1>Testando PHP</h1>
    
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ". date("d/H/Y");
        echo ". São ". date("G:i:s T");
    ?>

</body>
</html>