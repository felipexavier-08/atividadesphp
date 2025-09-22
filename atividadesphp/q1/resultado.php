<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>

        .voltar{

            padding: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            background-color: gray;
            text-decoration: none;
            color: white;

        }

    </style>
</head>
<body>
    
    <?php
    
        $area;//base x altura
        $perimetro;//2*base + 2*altura
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $base = $_POST["base"];//se refere ao name
            $altura = $_POST["altura"];

            $area = $base*$altura;
            $perimetro = (2*$base)+(2*$altura);

        }

    ?>
    <h4>

        Área: <?php echo number_format($area, 2, ".", "");?>

    </h4>


    <h4>

        Perímetro: <?php echo number_format($perimetro, 2, ".", "");?>

    </h4>
    <a href="index.php" class="voltar">Voltar</a>

</body>
</html>