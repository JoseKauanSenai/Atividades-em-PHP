<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade2</title>
</head>
<body class="bg-secondary text-white p-5">
        
        
    <form action="" method="get">

        <h5>Atividade 2</h5>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <label for="numero">Insira um número:</label>
            <input type="number" id="numero" name="numero" step="1" required><br><br>

            <input class="btn btn-primary" type="submit" value="calcular">

        </div>
    
        
        
    </form>  
    
    <?php

        if(isset($_GET['numero'])) {
            
            $numero = $_GET['numero'];
            
            if ($numero % 10 == 0) {
                echo "O número $numero é divisível por 10.";

            } elseif ($numero % 5 == 0) {
                echo "O número $numero é divisível por 5.";

            } elseif ($numero % 2 == 0) {
                echo "O número $numero é divisível por 2.";

            } else {
                echo "O número $numero não é divisível por 10, 5 ou 2.";

            }
        } else {
            echo "<p>Por favor, preencha todos os numeros.</p>";
        }
    ?>
       
    <hr>
    <br><br>
    <h4>Desenvolvido por José Kauan ®</h4>
</body>

</html>