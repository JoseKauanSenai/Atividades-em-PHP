<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade1</title>
</head>
<body class="bg-secondary text-white p-5">
        
        
    <form action="" method="get">
        <h5>Atividade 1</h5>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <label for="numero1">Numero 1:</label>
            <input type="number" id="numero1" name="numero1" step="1" required><br><br>
    
            <label for="numero2">Numero 2:</label>
            <input type="number" id="numero2" name="numero2" step="1" required><br><br>
            
            <input class="btn btn-primary" type="submit" value="Somar">
        
        </div>
        
    </form>  
    
    <?php
        if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
            
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            
            $soma = $numero1 + $numero2;
            
            if($soma > 20.0) {
                $soma8 = $soma + 8;
                echo "<p>A soma dos números citados foi: $soma</p>";
                echo "<p>E a soma de $soma + 8 é: $soma8</p>";

            }elseif ($soma <= 20.0) {
                $menos5 = $soma - 5;
                echo "<p>A soma dos números citados foi: $soma</p>";
                echo "<p>E a subtração de $soma - 5 é: $menos5</p>";
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