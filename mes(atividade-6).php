<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade6</title>
</head>
<body class="bg-secondary text-white p-5">
        
        
    <form action="" method="get">

        <h5>Atividade 6</h5>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <label for="mes">Insira o numero do mês:</label>
            <input type="number" id="mes" name="mes" step="1" required><br><br>

            <input class="btn btn-primary" type="submit" value="Verificar">

        </div>
    
        
        
    </form>  
    
    <?php

        if (isset($_GET['mes'])) {

            $numero = $_GET['mes'];
            
            $meses = array(
                1 => "Janeiro",
                2 => "Fevereiro",
                3 => "Março",
                4 => "Abril",
                5 => "Maio",
                6 => "Junho",
                7 => "Julho",
                8 => "Agosto",
                9 => "Setembro",
                10 => "Outubro",
                11 => "Novembro",
                12 => "Dezembro"
            );
            
            if ($numero >= 1 && $numero <= 12) {
                echo "<br><p>O mês do número $numero é: " . $meses[$numero] . "</p>";
                
            }else{
             echo "<br>O mês não existe!";
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