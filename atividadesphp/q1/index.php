<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
    <style>
        *{
            margin 0;
            padding 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            align-content: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

    <h1>Questão 1</h1>
    <p>
        Crie um formulário em HTML com dois campos de texto para ler os valores do lado de
        um retângulo e um botão submit. Crie uma página em PHP que receba os dados e exiba o
        valor da área e do perímetro do retângulo.
    </p>
    
    <form action="resultado.php" method = "POST">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" step="0.1"><!-- step- de quanto em quanto o numero sobe -->
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.1">
        <button>Enviar</button>
    </form>

</body>
</html>