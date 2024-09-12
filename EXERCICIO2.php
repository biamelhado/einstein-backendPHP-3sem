<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 2</title>
</head>

<body>
    <h1>ATIVIDADE 2</h1>
    <h3>CONVERSOR DE MOEDAS</h3>
    <div>
        <form method="POST">
            Digite o valor a ser convertito em Reais (R$): <input type="text" name="reais"><br>
            Digite a cotação do Dolar ($): <input type="text" name="dolar"><br>
            Digite a cotação do Euro (€): <input type="text" name="euro"><br>
            Digite a cotação da Libra (£): <input type="text" name="libra"><br>
            <input type="submit" value="calcular">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (
            isset($_POST["dolar"]) && isset($_POST["euro"]) && isset($_POST["libra"]) && isset($_POST["reais"]) &&
            is_numeric($_POST["dolar"]) && is_numeric($_POST["euro"]) && is_numeric($_POST["libra"]) && is_numeric($_POST["reais"])
        ) {
            $usd = $_POST["reais"] / $_POST["dolar"];
            $eur = $_POST["reais"] / $_POST["euro"];
            $lib = $_POST["reais"] / $_POST["libra"];
            echo "Valor em Reais: R$ {$_POST['reais']}<br>";
            echo "Valor em Dólares: $ $usd<br>";
            echo "Valor em Euros: € $eur<br>";
            echo "Valor em Libras: £ $lib<br>";
        } else {
            echo "<p>Por favor, preencha todos os campos com valores numéricos.</p>";
        }
    }
    ?>
</body>

</html>