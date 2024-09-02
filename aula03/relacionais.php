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
        echo '<h3>Operadores Relacionais</h3>';
        $num1 = 5;
        $num2 = 3;
        
        $tipo = "s";
        $r = $tipo == "s" ? $num1 + $num2 : $num1 * $num2;
        echo "O resultado = $r";
        ?>
    </body>
</html>
