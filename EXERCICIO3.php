<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 3</title>
</head>

<body>
    <h1>ATIVIDADE 3</h1>
    <h3>CALCULANDO SEU IMC</h3>
    <div>
        <form method="POST">
            Digite sua altura: <input type="text" name="altura"><br>
            Digite seu peso: <input type="text" name="peso"><br>
            <input type="submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos "altura" e "peso" foram preenchidos
        if (isset($_POST["altura"]) && isset($_POST["peso"])) {
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];


            if (is_numeric($altura) && is_numeric($peso) && $altura > 0 && $peso > 0) {
                $IMC = $peso / ($altura * $altura);

                // Exibe a mensagem correspondente ao IMC calculado
                if ($IMC < 18.5){
                    echo "Abaixo do peso ideal. Procure um nutricionista!";
                } else if ($IMC <= 24.9){
                    echo "Você está no seu peso ideal. Procure manter o peso!";
                } else if ($IMC <= 29.9){
                    echo "Levemente acima do peso. Procure um nutricionista!";
                } else if ($IMC <= 34.9){
                    echo "Obesidade grau I. Procure um nutricionista!";
                } else if ($IMC <= 39.9){
                    echo "Obesidade grau II, Severa. Procure um nutricionista!";
                } else {
                    echo "Obesidade grau III, Mórbida. Procure um nutricionista!";
                }
            } else {
                echo "Por favor, digite valores válidos para altura e peso.";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    ?>
</body>

</html>