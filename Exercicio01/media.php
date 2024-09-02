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
        <h3>Relatório da Média dos Alunos</h3>
        <?php
        // put your code here


        $nome = $_GET["nome"];
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $n4 = $_GET["n4"];


        if ($nome == NULL || $n1 == NULL || $n2 == NULL || $n3 == NULL || $n4 == NULL) {
            echo "<p>Existem campos vazios</p>";
        } else {

            $resu = ($n1 + $n2 + $n3 + $n4) / 4;
            $status = $resu >= 6 ? "aprovado</p>" : "reprovado</p>";


            echo "<p>O aluno(a) $nome obteve a média = $resu</p>";
            echo "<p>$nome esta $status </p>";
        }
        ?>
        <a href="media.html">Voltar</a>
    </body>
</html>
