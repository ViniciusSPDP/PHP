<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Idade</title>
    </head>
    <body>
        <?php
        // put your code here
        $nome = !empty($_GET["nome"]) ? $_GET["nome"] : "[Campo Vazio]" ;
        $ano =  !empty($_GET["ano"]) ? $_GET["ano"] : "[Campo Vazio]";
        $sexo = !empty($_GET["sexo"]) ? $_GET["sexo"] : "[Campo Vazio]";
        $idade = $ano != "[Campo Vazio]" ? date("Y") - $ano : "[Campo Vazio]";
        
        /*
        Recebendo dados do formulário
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
         */
        
        echo '<h3>Recebendo dados do Formulário 2</h3>';
        echo "$nome é do sexo $sexo e tem $idade anos <br />";
        ?>
        
        <br />
        
        <a href="form2.html">Voltar</a>
        
    </body>
</html>
