<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 1</title>
</head>

<body>
    <h1>ATIVIDADE 1</h1>
    <h3>CALCULADORA DE COMBUSTIVEL</h3>
    <div>
        <form method="POST" onsubmit="return validarCombustivel();">
            Digite o valor do álcool:
            <input type="text" id="valoralcool" name="valoralcool" required><br>
            Digite o valor da gasolina:
            <input type="text" id="valorgasolina" name="valorgasolina" required><br>
            <br><button type="submit">Calcular</button>
        </form>
    </div>
    <br>

    <script type="text/javascript"> 
        function validarCombustivel() {
            var valoralcool = document.getElementById("valoralcool").value.trim();
            var valorgasolina = document.getElementById("valorgasolina").value.trim();

            if (valoralcool === "" || valorgasolina === ""){
                alert("Por favor, preencha todos os campos!");
                return false;
            }

            if (isNaN(valoralcool) || isNaN(valorgasolina)) {
                alert("Os campos devem ser preenchidos somente com números!");
                return false;
            }

            return true;
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valoralcool = $_POST["valoralcool"];
        $valorgasolina = $_POST["valorgasolina"];

        if (!empty($valoralcool) && !empty($valorgasolina)) {
            $MELHORVALOR = $valoralcool / $valorgasolina;
            if ($MELHORVALOR <= 0.7){
                echo "Álcool com melhor custo-benefício. Abasteça com álcool!";
            } else {
                echo "Gasolina com melhor custo-benefício. Abasteça com gasolina!";
            }
        }
    }
    ?>
</body>

</html>