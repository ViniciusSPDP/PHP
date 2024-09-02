<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "<h3>Personalizado os valores insericos </h3>";
        
        //GET vai pegar na URL o parâmetro de "a" e colocar em $n1
        $n1 = $_GET["a"];
        
        //GET vai pegar na URL o parâmetro de "b" e colocar em $n2
        $n2 = $_GET["b"];
        
        //mostra a soma dos parâmetros digitados na URL
        echo "A soma = " . ($n1+$n2);
        ?>
    </body>
</html>
