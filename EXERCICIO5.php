<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 4</title>
</head>

<body>
    <h1>ATIVIDADE 4</h1>
    <h3>DESEMPENHO ESCOLAR</h3>
    <div>
        <form method="POST">
            Digite sua nota da AI1: <input type="text" name="AI1"><br>
            Digite sua nota da P1: <input type="text" name="P1"><br>
            Digite sua nota da P2: <input type="text" name="P2"><br>
            Digite sua nota da AI2: <input type="text" name="AI2"><br>
            Digite sua quantidade de faltas: <input type="text" name="frequencia"><br>
            <br><input type="submit">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["AI1"]) && isset($_POST["P1"]) && isset($_POST["P2"]) && isset($_POST["AI2"]) && isset($_POST["frequencia"])) {
            $AI1 = $_POST["AI1"];
            $P1 = $_POST["P1"];
            $P2 = $_POST["P2"];
            $AI2 = $_POST["AI2"];
            $frequencia = $_POST["frequencia"];

            if (!empty($AI1) && !empty($P1) && !empty($P2) && !empty($AI2) && !empty($frequencia)) {
                $media = ($AI1 + $P1 + $P2 + $AI2) / 4;
                
                if ($media >= 6 && $frequencia <= 20) {
                    echo "Parabéns, você foi APROVADO!";
                } else if ($media >= 6 && $frequencia > 20) {
                    echo "Você foi REPROVADO por frequência.";
                } else if ($media < 6 && $frequencia <= 20) {
                    echo "Você foi REPROVADO por nota.";
                } else {
                    echo "Você foi REPROVADO por nota e frequencia.";
                }
            } else {
                echo "Por favor, preencha todos os campos!";
            }
        }
    }
    ?>
</body>
</html>
