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
        echo '<h3>Tipo da varivel</h3>';
        
       
        $var1 = 10;
        $var2 = 35.86;
        $var3 = "PHP Hypertext Preprocessor";
        $var4 = FALSE;
        $var5 = null;
        
        echo '$var1 é do tipo ' . gettype($var1) . '<br>';
        echo '$var2 é do tipo ' . gettype($var2) . '<br>';
        echo '$var3 é do tipo ' . gettype($var3) . '<br>';
        echo '$var4 é do tipo ' . gettype($var4) . '<br>';
        echo '$var5 é do tipo ' . gettype($var5) . '<br>';
        
        
        ?>
    </body>
</html>
