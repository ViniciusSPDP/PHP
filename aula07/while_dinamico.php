<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Dinamico</title>
</head>
<body>
    <h3>While Dinamico</h3>
    <form action="while_dinamico_mostra.php" method="get">
        <?php
        $c = 1;
        while($c <= 5){
            echo "<p>$c valor: <input type='number' name='v$c'/></p>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar"/>
    </form>
    
</body>
</html>