<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h3>Resultado da Contagem</h3> <br/>
    <?php
    $ni = $_GET["ni"];
    $nf = $_GET["nf"];
    $i = $_GET["opt"];

    if($ni == null  || $nf == null){
        echo "Não foi informado valor inicial ou final <br>";
    } 
    else{
        if ($ni < $nf) {
            for($num = $ni; $num <= $nf; $num += $i) {
                echo "$num<br>";
            }
        } else {
            for($num = $ni; $num >= $nf; $num -= $i) {
                echo "$num<br>";
            }
        }
    }
    ?> <br>
    <a href="contador.php">Voltar</a>
    
</body>
</html>
