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
        echo '<h3>Operadores Lógicos</h3>';
        $ano = 2000;
        $idade = 2018 - $ano;
        
        echo "Quem nasceu $ano tem idade de $idade anos.";
        $tipo = ($idade >= 18 && $idade <65) ? "e obrigatório " : "não é obrigatório";
        echo "<br> Seu voto $tipo";
        ?>
    </body>
</html>
