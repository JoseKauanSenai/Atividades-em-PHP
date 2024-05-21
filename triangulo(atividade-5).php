<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade5</title>
</head>
<body class="bg-secondary text-white p-5">
        
        
    <form action="" method="get">
        <h5>Atividade 5</h5>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">

            <label for="lado1">Lado 1:</label>
            <input type="number" id="lado1" name="lado1" step="1" required><br><br>
    
            <label for="lado 2">Lado 2:</label>
            <input type="number" id="lado2" name="lado2" step="1" required><br><br>

            <label for="lado3">Lado 3:</label>
            <input type="number" id="lado3" name="lado3" step="1" required><br><br>
            
            <input class="btn btn-primary" type="submit" value="Verificar">
        
        </div>
        
    </form>  
    
    <?php
        if(isset($_GET['lado1']) && isset($_GET['lado2']) && isset($_GET['lado3'])) {
            
            $lado1 = $_GET['lado1'];
            $lado2 = $_GET['lado2'];
            $lado3 = $_GET['lado3'];

        
            function classificarTriangulo($l1, $l2, $l3) {
                if ($l1 == $l2 && $l2 == $l3) {
                    return "Equilátero";
                } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
                    return "Isósceles";
                } else {
                    return "Escaleno";
                }
            }
        
            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                $classificacao = classificarTriangulo($lado1, $lado2, $lado3);
                echo "<p>Os lados $lado1, $lado2 e $lado3 formam um triângulo $classificacao.</p>";
            } else {
                echo "<p>Os lados fornecidos não formam um triângulo válido.</p>";
            }
        }else {
            echo "<p>Por favor, preencha todos os numeros.</p>";
        }
    ?>

    <hr>
    <br><br>
    <h4>Desenvolvido por José Kauan ®</h4>
        
</body>

</html>