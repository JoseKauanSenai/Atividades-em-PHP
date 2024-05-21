<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade3</title>
</head>
<body class="bg-secondary text-white p-5">
        
    <form action="" method="get">

        <h5>Atividade 3</h5>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <label for="nome">Qual seu nome?</label>
            <input id="nome" name="nome" required><br><br>

            <label for="sexo">Qual seu sexo (F/M)?</label>
            <input id="sexo" name="sexo" required><br><br>

            <label for="idade">Qual sua idade?</label>
            <input type="number" id="idade" name="idade" required><br><br>

            <input class="btn btn-primary" type="submit" value="Verificar">

        </div>
    
        
        
    </form>  
    
    <?php

        if(isset($_GET['nome']) && isset($_GET['sexo']) && isset($_GET['idade'])) {
            
            $nome = $_GET['nome'];
            $sexo = $_GET['sexo'];
            $idade = $_GET['idade'];
            
            if (strtoupper($sexo) === 'F' && $idade < 25) {
                echo "$nome você foi ACEITA";
            } else {
                echo "$nome você NÃO foi ACEITA";
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