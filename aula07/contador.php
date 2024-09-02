<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h3>Contador</h3>
    <form action="contador_mostra.php" method="get">
        Numero Inicial <input type="number" name="ni" id=""> <br /><br/>
        Numero Final <input type="number" name="nf" id=""> <br/><br/>
        Incremento Decremento
        <select name="opt" id="">
            <?php
            for($i = 1; $i<=5; $i++){
                echo '<option value="' . $i .'">'.$i.'</option>';
            }
            ?>
        </select> <br/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    
</body>
</html>