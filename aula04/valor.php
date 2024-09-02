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
        $valor = $_GET["v"];
        $pi = intval($valor);
        
        echo "<h3>Recebendo dados do Formulário 1 </h3>";
        echo "A parte inteira de $valor = $pi </br>";
        ?>
        <br>
        <a href="form1.html">Voltar</a>
        
    </body>
</html>
