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
    $n = $_GET["num"];
    @$op = $_GET["oper"];

    if ($n == null || empty($op)) {
        echo "Falta alguma informação no formulário <br/>";
    } else {
        echo "O valor total da compra = $n <br/><br/>";
        switch ($op) {
            case 1:
                $r = $n - ($n * 0.1);
                echo "O valor total com pagamento à vista e desconto de 10% = $r";
                break;
            case 2:
                $r = $n + ($n * 0.05);
                echo "O valor total com pagamento em 30 dias e juros de 5% = $r";
                break;
            case 3:
                $r = $n + ($n * 0.1);
                echo "O valor total com pagamento em 60 dias e juros de 10% = $r";
                break;
            default:
            echo "Não foi selecionado uma forma de pagamento";
        }
    }

    ?>
    <br><br>
    <a href="switch.html">Voltar</a>

</body>

</html>