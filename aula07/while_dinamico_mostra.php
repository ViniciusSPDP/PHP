<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Dinamico Mostra</title>
</head>

<body>
    <h3>Mostrando os valores</h3>
    <?php
    $i = 1;
    while ($i <= 5) {
        //Pega os dados da URL
        $valor = $_GET["v" . $i];
        if ($valor == null) {
            echo "<p>Falta digitar o $i valor</p>";
        } else {
            //Mostra os dados no navegador
            echo "<p>$i valor: $valor</p>";
        }
        $i++;
    }
    ?>
    <br />
    <a href="while_dinamico.php">Voltar</a>

</body>

</html>