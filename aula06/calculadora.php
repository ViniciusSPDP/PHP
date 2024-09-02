<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Confirmação de Pagamento</h3>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    @$op = $_GET["op"];

    if ($n1 == null || empty($op) || $n2 == null) {
        echo "Falta alguma informação no formulário <br/>";
    } else {
        switch ($op) {
            case 1:
                $r = $n1 + $n2;
                echo "A soma de $n1 + $n2 = $r";
                break;
            case 2:
                $r = $n1 - $n2;
                echo "A subtração de $n1 - $n2 = $r";
                break;
            case 3:
                $r = $n1 * $n2;
                echo "A multiplicação de $n1 * $n2 = $r";
                break;
                case 4:
                    $r = $n1 / $n2;
                    echo "A divisao de $n1 / $n2 = $r";
                    break;
            default:
                echo "Não foi selecionado uma forma de pagamento";
        }
    }

    ?>
    <br><br>
    <a href="calculadora.html">Voltar</a>

</body>

</html>