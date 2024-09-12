<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <title>INSCRIÇÃO CURSO</title> 
</head>
<body>
    <h2>INSCRIÇÃO CURSO TI/h2> 
    <form action="" method="post">
        <label for="nome">Nome:</label><br> 
        <input type="text" id="nome" name="nome"><br><br> 

        <label for="email">E-mail:</label><br> 
        <input type="text" id="email" name="email"><br><br> 

        <label for="telefone">Telefone:</label><br> 
        <input type="text" id="telefone" name="telefone"><br><br> 

        <label for="curso">Cursos oferecidos:</label><br> 
        <select id="curso" name="curso">
            <option value="python">Python</option>
            <option value="arduino">Arduino</option>
            <option value="robotica">Robótica</option>
        </select><br><br>

        <input type="submit" value="Enviar"> 
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $telefone = $_POST['telefone'];
        $curso = $_POST['curso'];
    }
        
        if ($curso == 'python') {
            echo "Inscrição no curso de Python foi realizada com sucesso! Seu curso
            será dia 20/04/2024 às 09h00 no laboratório 13";

        } elseif ($curso == 'arduino') {
            echo "Inscrição no curso de Arduino foi realizada com sucesso! Seu curso 
            será dia 20/04/2024 às 09h00 no laboratório 16.";
           
        } elseif ($curso == 'robotica') {
            echo "Inscrição no curso de Robótica foi realizada com sucesso! Seu curso 
            será dia 20/04/2024 às 09h00 no laboratório 15.";
    }
    ?>
</body>
</html>