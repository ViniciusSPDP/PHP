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
        $i = $_GET["idade"];

        //if( empty($i))
        if ($i == NULL) {
            echo "Volte e digite sua idade";
        } elseif ($i >= 18) {
            echo "Você tem $i anos <br />";
            echo "Com essa idade você pode tirar habilitação";
        } else {
            echo "Você tem $i anos <br />";
            echo "Com essa idade você não pode tirar habilitação";
        }
        ?>
        <br /> <br />
        <a href="if_else.html">Voltar</a>
    </body>
</html>
